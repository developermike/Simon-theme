<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 14:29:32
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin506ybmroc/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183993126855407a4c4cef01-73973555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a5c073318f95d08164dbaca2c4869fa4e26c2db' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin506ybmroc/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183993126855407a4c4cef01-73973555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55407a4c4d2257_90887702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55407a4c4d2257_90887702')) {function content_55407a4c4d2257_90887702($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
