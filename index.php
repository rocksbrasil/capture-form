<?php
/* SCRIPT GERAL DE CAPTURA DE CONTATOS
 * by: RocksBrasil Development Team
 * www.rocksbrasil.com.br
 * ---------------------------------- */
@session_start();
ini_set("log_errors", 1);
ini_set("error_log", "capture-errors.log");
error_reporting(E_ERROR);
setlocale(LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');
require('config.php');
require('functions.php');
require('plugins/form/form.php');
require('plugins/smarty/Smarty.class.php');
require('plugins/phpmailer/PHPMailerAutoload.php');
$form = new form();
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates/compiled/';

/* RESULTAR IMAGEM DO CAPTCHA
 * em caso de ativado
 * ---------------------------------- */
if(isset($_GET['captcha-image'])){
	require_once 'plugins/securimage/securimage.php';
	$_SESSION['captcha'] = strtolowerplus(gerarKey(4));
	$options = array(
		'display_value' => $_SESSION['captcha'],
        'captchaId'     => sha1(uniqid($_SERVER['REMOTE_ADDR'] . $_SERVER['REMOTE_PORT'])),
        'text_color'	=> '#000000',
        'perturbation'	=> 0.6,
        'num_lines'		=> 2,
        'image_width'   => 80,
        'image_height'  => 50,
        'no_session'    => true,
        'no_exit'       => true,
        'use_database'  => false,
        'send_headers'  => false,
		'captcha_type'  => Securimage::SI_CAPTCHA_WORDS);
	// construct new Securimage object with the given options
	$img = new Securimage($options);
	ob_start();   // start the output buffer
	$img->show(); // output the image so it is captured by the buffer
	$imgBinary = ob_get_contents(); // get contents of the buffer
	ob_end_clean(); // turn off buffering and clear the buffer
	header('Content-Type: image/png');
	header('Content-Length: ' . strlen($imgBinary));
	die($imgBinary);
}

/* SCRIPT DE ENVIO
 * altere somente em casos necessários,
 * qualquer alteração pode comprometer o script
 * ---------------------------------- */
foreach ($fields as $key => $value){
	$form->addField($key, $value);
}
// validar formulário
if($_POST){
	$form->arrayToFieldValues($_POST, false);
	if(!REQUIRE_CAPTCHA || (isset($_SESSION['captcha']) && isset($_REQUEST['captcha']) && $_SESSION['captcha'] == $_REQUEST['captcha'])){
		$form->valideForm();
		if(!$form->errors){
			// enviar formulário
			$smarty->assign('fields', $form->fields);
			$body = $smarty->fetch('email/contato.html');
			$mailDebug = '';
			$mailSmtp = Array(
				'host' => SMTP_HOST,
				'port' => SMTP_PORT,
				'user' => SMTP_USER,
				'pass' => SMTP_PASS,
				'secure' => SMTP_SECURE,
				'debug' => true,
			);
			ob_start();
			// phpmailer
			$mail = new PHPMailer;
			if(isset($mailSmtp['host']) && isset($mailSmtp['port'])){
				$mail->isSMTP();
				$mail->SMTPDebug = (isset($mailSmtp['debug']))? $mailSmtp['debug']: false;
				$mail->Host = $mailSmtp['host'];
				$mail->Port = $mailSmtp['port'];
				if(isset($mailSmtp['user']) && isset($mailSmtp['pass'])){
					$mail->SMTPAuth = true;
					$mail->Username =  $mailSmtp['user'];
					$mail->Password =  $mailSmtp['pass'];
					$mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
				}
				if(isset($mailSmtp['secure'])){
					$mail->SMTPSecure = $mailSmtp['secure'];
				}
			}
			$mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    )
			);
			$mail->CharSet = 'UTF-8';
			$mail->isHTML(true);
			$mail->Subject = MAIL_SUBJECT;
			$mail->Body = $body;
			$mail->FromName = SMTP_FROM_NAME;
			foreach ($address as $key => $value) {
				$mail->addAddress($value, $key);
			}
			$mailResult = $mail->send();
			$mailDebug = utf8_decode(ob_get_clean());
			if(!$mailResult){
				$_TEMPLATE['failed'] = 1;
				$_TEMPLATE['printDebug'] = (SMTP_DEBUG)? $mailDebug: null;
			}else{
				unset($_SESSION['captcha']);
				$_TEMPLATE['submitted'] = 1;
				foreach ($form->fields as $key => $value) {
					$form->addFieldAttribute($key, 'disabled', '1');
				}
			}
		}
	}elseif(REQUIRE_CAPTCHA){
		$form->fields['captcha']['error'] = 1;
	}
}
// template
$_TEMPLATE['PAGE'] = 'index';
$_TEMPLATE['GET'] = $_GET;//retorna o get pro template
$_TEMPLATE['POST'] = $_POST;//retorna o post pro template
$_TEMPLATE['REQUEST'] = $_REQUEST;//retorna o request pro template
$_TEMPLATE['BASEDIR'] = getExistentUrlPath();
$_TEMPLATE['URL'] = currentUrl();
$_TEMPLATE['TITLE'] = TPL_TITLE;
$_TEMPLATE['DESCRIPTION'] = TPL_DESCRIPTION;
$_TEMPLATE['fields'] = $form->fields;
foreach ($_TEMPLATE as $key => $value) {
	$smarty->assign($key,$value);
}
if($_TEMPLATE['PAGE'] && file_exists('templates/'.$_TEMPLATE['PAGE'].'.html')){
	$smarty->display($_TEMPLATE['PAGE'].'.html');
}else{
	header('HTTP/1.0 404 Not Found');
	if(file_exists('templates/404.html')){
		$smarty->display('smarty/templates/404.html');
	}else{
		echo "<h1>404 Not Found</h1>";
	}
}
