<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:36
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_background-variant.scss" */ ?>
<?php /*%%SmartyHeaderCode:824713160554074b0e143e1-60532651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '224eee5da2857236f1f9b281577cc225b42a777a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_background-variant.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824713160554074b0e143e1-60532651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b0e1b943_25695855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b0e1b943_25695855')) {function content_554074b0e1b943_25695855($_smarty_tpl) {?>// Contextual backgrounds

// [converter] $parent hack
@mixin bg-variant($parent, $color) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    background-color: $color;
  }
  a#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
:hover {
    background-color: darken($color, 10%);
  }
}
<?php }} ?>
