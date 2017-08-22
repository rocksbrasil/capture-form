<?php
/* Smarty version 3.1.29, created on 2017-08-22 04:35:40
  from "C:\wamp64\www\capture-form\templates\form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_599bdecce63d72_55960298',
  'file_dependency' => 
  array (
    '5f8434d4b1357ea809dd3172d02884b1dd1980b3' => 
    array (
      0 => 'C:\\wamp64\\www\\capture-form\\templates\\form.html',
      1 => 1503387333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599bdecce63d72_55960298 ($_smarty_tpl) {
if ((($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? 0 : $tmp)) {?>
<form method="post" enctype="multipart/form-data">
	<div class="head">
		<h4><?php echo (($tmp = @@constant('TPL_FORM_TITLE'))===null||$tmp==='' ? '' : $tmp);?>
</h4>
		<p><?php echo (($tmp = @@constant('TPL_FORM_TEXT'))===null||$tmp==='' ? '' : $tmp);?>
</p>
	</div>
	<?php
$_from = $_smarty_tpl->tpl_vars['fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_field_0_saved_item = isset($_smarty_tpl->tpl_vars['field']) ? $_smarty_tpl->tpl_vars['field'] : false;
$__foreach_field_0_saved_key = isset($_smarty_tpl->tpl_vars['fkey']) ? $_smarty_tpl->tpl_vars['fkey'] : false;
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fkey'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['field']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fkey']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
$__foreach_field_0_saved_local_item = $_smarty_tpl->tpl_vars['field'];
if ($_smarty_tpl->tpl_vars['fkey']->value != "captcha") {?><fieldset class="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['error'])===null||$tmp==='' ? 0 : $tmp)) {?>error<?php }?> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['class'])===null||$tmp==='' ? '' : $tmp);?>
">
		<figure><i class="fa <?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['fa-icon'])===null||$tmp==='' ? 'fa-circle-thin' : $tmp);?>
"></i></figure>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'select') {?>
		<select name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['fkey']->value : $tmp);?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['required'])===null||$tmp==='' ? 0 : $tmp)) {?>required<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['disabled'])===null||$tmp==='' ? 0 : $tmp)) {?>disabled<?php }?> class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['class'])===null||$tmp==='' ? '' : $tmp);?>
">
			<?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['placeholder'])===null||$tmp==='' ? 0 : $tmp)) {?><option selected disabled><?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
</option><?php }?>
			<?php
$_from = $_smarty_tpl->tpl_vars['field']->value['options'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_optval_1_saved_item = isset($_smarty_tpl->tpl_vars['optval']) ? $_smarty_tpl->tpl_vars['optval'] : false;
$__foreach_optval_1_saved_key = isset($_smarty_tpl->tpl_vars['optkey']) ? $_smarty_tpl->tpl_vars['optkey'] : false;
$_smarty_tpl->tpl_vars['optval'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['optkey'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['optval']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['optkey']->value => $_smarty_tpl->tpl_vars['optval']->value) {
$_smarty_tpl->tpl_vars['optval']->_loop = true;
$__foreach_optval_1_saved_local_item = $_smarty_tpl->tpl_vars['optval'];
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['optkey']->value;?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp) == $_smarty_tpl->tpl_vars['optkey']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['optval']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['optval'] = $__foreach_optval_1_saved_local_item;
}
if ($__foreach_optval_1_saved_item) {
$_smarty_tpl->tpl_vars['optval'] = $__foreach_optval_1_saved_item;
}
if ($__foreach_optval_1_saved_key) {
$_smarty_tpl->tpl_vars['optkey'] = $__foreach_optval_1_saved_key;
}
?>
		</select>
		<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textarea') {?><textarea name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['fkey']->value : $tmp);?>
" type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['type'])===null||$tmp==='' ? 'text' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['placeholder'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['mask']) {?>data-mask="<?php echo $_smarty_tpl->tpl_vars['field']->value['mask'];?>
"<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['required'])===null||$tmp==='' ? 0 : $tmp)) {?>required<?php }?> maxlength="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['maxlen'])===null||$tmp==='' ? 300 : $tmp);?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['class'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['disabled'])===null||$tmp==='' ? 0 : $tmp)) {?>disabled<?php }?>><?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
		<?php } else { ?><input name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['fkey']->value : $tmp);?>
" type="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['type'])===null||$tmp==='' ? 'text' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['placeholder'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['mask']) {?>data-mask="<?php echo $_smarty_tpl->tpl_vars['field']->value['mask'];?>
"<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['required'])===null||$tmp==='' ? 0 : $tmp)) {?>required<?php }?> maxlength="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['maxlen'])===null||$tmp==='' ? 300 : $tmp);?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? '' : $tmp);?>
" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['field']->value['class'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['field']->value['disabled'])===null||$tmp==='' ? 0 : $tmp)) {?>disabled<?php }?>><?php }?>
		<hr/>
	</fieldset><?php }
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_0_saved_local_item;
}
if ($__foreach_field_0_saved_item) {
$_smarty_tpl->tpl_vars['field'] = $__foreach_field_0_saved_item;
}
if ($__foreach_field_0_saved_key) {
$_smarty_tpl->tpl_vars['fkey'] = $__foreach_field_0_saved_key;
}
?>
	<?php if (@constant('REQUIRE_CAPTCHA') && !$_smarty_tpl->tpl_vars['submitted']->value) {?>
	<fieldset class="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['fields']->value['captcha']['error'])===null||$tmp==='' ? 0 : $tmp)) {?>error<?php }?> captcha">
		<figure>
			<img src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
?captcha-image">
		</figure>
		<input type="text" name="captcha" placeholder="Captcha:">
	</fieldset>
	<?php }?>
	<?php if (!(($tmp = @$_smarty_tpl->tpl_vars['submitted']->value)===null||$tmp==='' ? 0 : $tmp)) {?>
	<fieldset>
		<button type="submit" class="send-button">
			<div class="flex-container flex-align-left flex-align-middle flex-nowrap">
				<figure class="flex-stretch">
					<i class="fa fa-send"></i>
				</figure>
				<div><h6><?php echo @constant('TPL_SUBMIT_BUTTON_TEXT');?>
</h6></div>
			</div>
		</button>
	</fieldset>
	<?php } else { ?>
	<fieldset>
		<button type="button" class="check-button">
			<div class="flex-container flex-align-left flex-align-middle flex-nowrap">
				<figure class="flex-stretch">
					<i class="fa fa-check"></i>
				</figure>
				<div><h6><?php echo @constant('TPL_SUBMITTED_BUTTON_TEXT');?>
</h6></div>
			</div>
		</button>
	</fieldset>
	<?php }?>
</form>
<?php }
}
}
