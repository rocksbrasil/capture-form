<?php
/* Smarty version 3.1.29, created on 2017-08-22 05:26:44
  from "C:\wamp64\www\capture-form\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599beac44c8ce6_21089480',
  'file_dependency' => 
  array (
    'bfbdc639ea33737932bcdf475d8da8ba5189da65' => 
    array (
      0 => 'C:\\wamp64\\www\\capture-form\\templates\\index.html',
      1 => 1503390393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:content.html' => 1,
    'file:form.html' => 1,
  ),
),false)) {
function content_599beac44c8ce6_21089480 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ptbr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['BASEDIR']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
">
		<meta name="author" content="RocksBrasil - www.rocksbrasil.com.br">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="css/global.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="css/theme.css" type="text/css" media="screen" charset="utf-8"/>
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="css/font-worksans.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<link rel="stylesheet" href="css/font-pathway.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
		<?php echo '<script'; ?>
 src="js/jquery.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.mask.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.autosize.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
	</head>
	<body>
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['printDebug']->value)===null||$tmp==='' ? '' : $tmp);?>

		<div class="master flex-container flex-align-center flex-align-middle">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div>
				<div class="whitebox">
					<div class="form">
						<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						<div class="spamtext">
							<p><?php echo (($tmp = @@constant('TPL_SPAM_TEXT'))===null||$tmp==='' ? '' : $tmp);?>
</p>
						</div>
					</div>
					<div class="social">
						<ul>
							<a href=""><li class="transition"><i class="fa fa-facebook"></i></li></a>
							<a href=""><li class="transition"><i class="fa fa-twitter"></i></li></a>
							<a href=""><li class="transition"><i class="fa fa-youtube"></i></li></a>
							<a href=""><li class="transition"><i class="fa fa-dropbox"></i></li></a>
							<a href=""><li class="transition"><i class="fa fa-github"></i></li></a>
							<a href=""><li class="transition"><i class="fa fa-vimeo"></i></li></a>
						</ul>
					</div>
				</div>
				<div class="powered noselect"><p><a target="_new" href="http://www.rocksbrasil.com.br">powered by <b><img src="images/footer.png"></b></a></p></div>
			</div>
		</div>
	</body>
</html>
<?php }
}
