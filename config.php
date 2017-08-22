<?php
/* SCRIPT GERAL DE CAPTURA DE CONTATOS
 * by: RocksBrasil Development Team
 * www.rocksbrasil.com.br
 * ---------------------------------- */

/* PARÂMETROS DE CONFIGURAÇÃO
 * altere os dados a seguir conforme a sua aplicação
 * ---------------------------------- */
define('REQUIRE_CAPTCHA', true);
// smtp config
define('SMTP_SECURE', false);// protocolos de segurança (tls/ssl)
define('SMTP_HOST', 'localhost');// smtp server host
define('SMTP_PORT', 25);// smtp server port
define('SMTP_USER', false);// smtp server user
define('SMTP_PASS', false);// smtp server pass
define('SMTP_FROM', SMTP_USER);// from email
// template vars
define('TPL_TITLE', 'Fale conosco!');// título da página
define('TPL_DESCRIPTION', 'Contate-nos!');// decrição da página
define('TPL_SUBMIT_BUTTON_TEXT', 'Enviar');// texto do botão de enviar
define('TPL_SUBMITTED_BUTTON_TEXT', 'Enviado');
define('TPL_SPAM_TEXT', '* Também odiamos spam, seus dados estarão seguros conosco!');
define('TPL_FORM_TITLE', 'Contate-nos!');
define('TPL_FORM_TEXT', 'Estamos anciosos em falar com você.');

/* CAMPOS DO FORMULÁRIO
 * adicione ou remova os campos seguindo o padrão
 * pode-se encontrar mais detalhes em plugins/form/form.php
 * ---------------------------------- */
$fields['nome'] = Array(
	'type' => 'text',
	'value' => '',
	'maxlen' => 100,
	'minlen' => 2,
	'placeholder' => 'Nome:',
	'required' => true,
	'fa-icon' => 'fa-user',
);
$fields['empresa'] = Array(
	'type' => 'text',
	'value' => '',
	'maxlen' => 100,
	'minlen' => 2,
	'placeholder' => 'Empresa:',
	'required' => true,
	'fa-icon' => 'fa-building',
);
$fields['email'] = Array(
	'type' => 'email',
	'value' => '',
	'minlen' => 5,
	'maxlen' => 100,
	'valideFunc' => 'validarEmail',
	'placeholder' => 'E-mail:',
	'required' => true,
	'fa-icon' => 'fa-envelope',
);
$fields['fone'] = Array(
	'type' => 'phone',
	'value' => '',
	'minlen' => 10,
	'maxlen' => 20,
	'placeholder' => 'Fone:',
	'required' => true,
	'fa-icon' => 'fa-phone',
	'mask' => '(00) 00000-0000',
);
$fields['assunto'] = Array(
	'type' => 'select',
	'value' => '',
	'minlen' => 2,
	'maxlen' => 100,
	'placeholder' => 'Assunto:',
	'required' => true,
	'fa-icon' => 'fa-comment',
	'options' => Array(
		'Vendas' => 'Vendas',
		'Suporte' => 'Suporte',
		'Atendimento' => 'Atendimento',
		'Outro' => 'Outro',
	),
);
$fields['endereco'] = Array(
	'type' => 'text',
	'value' => '',
	'minlen' => 2,
	'maxlen' => 200,
	'placeholder' => 'Rua/Número:',
	'required' => true,
	'fa-icon' => 'fa-map-marker',
);
$fields['bairro'] = Array(
	'type' => 'text',
	'value' => '',
	'minlen' => 2,
	'maxlen' => 200,
	'placeholder' => 'Bairro:',
	'required' => true,
	'fa-icon' => 'fa-map-marker',
);
$fields['cidade'] = Array(
	'type' => 'text',
	'value' => '',
	'minlen' => 2,
	'maxlen' => 200,
	'placeholder' => 'Cidade:',
	'required' => true,
	'fa-icon' => 'fa-map-marker',
);
$fields['estado'] = Array(
	'type' => 'select',
	'value' => '',
	'minlen' => 1,
	'maxlen' => 5,
	'placeholder' => 'Estado:',
	'required' => true,
	'fa-icon' => 'fa-map-marker',
	'options' => array("AC"=>"Acre", "AL"=>"Alagoas", "AM"=>"Amazonas", "AP"=>"Amapá","BA"=>"Bahia","CE"=>"Ceará","DF"=>"Distrito Federal","ES"=>"Espírito Santo","GO"=>"Goiás","MA"=>"Maranhão","MT"=>"Mato Grosso","MS"=>"Mato Grosso do Sul","MG"=>"Minas Gerais","PA"=>"Pará","PB"=>"Paraíba","PR"=>"Paraná","PE"=>"Pernambuco","PI"=>"Piauí","RJ"=>"Rio de Janeiro","RN"=>"Rio Grande do Norte","RO"=>"Rondônia","RS"=>"Rio Grande do Sul","RR"=>"Roraima","SC"=>"Santa Catarina","SE"=>"Sergipe","SP"=>"São Paulo","TO"=>"Tocantins"),
);
$fields['mensagem'] = Array(
	'type' => 'textarea',
	'value' => '',
	'minlen' => 2,
	'maxlen' => 1000,
	'placeholder' => 'Mensagem:',
	'required' => true,
	'fa-icon' => 'fa-commenting',
	'class' => 'autosize',
);
