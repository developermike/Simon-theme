<?php /* Smarty version Smarty-3.1.19, created on 2015-04-30 16:26:10
         compiled from "/home1/lamppp/htdocs/Simon-theme/modules/mib/views/templates/hook/mib.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11950143555541e7221a1871-13085223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f6398d597fcc1e735fff0ed427256f59b593fd' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/modules/mib/views/templates/hook/mib.tpl',
      1 => 1430381888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11950143555541e7221a1871-13085223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'content_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5541e7221f1639_93971685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541e7221f1639_93971685')) {function content_5541e7221f1639_93971685($_smarty_tpl) {?><div class="block" id="mypresta_mib">
    <p class="title_block"><?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'mib'),$_smarty_tpl);?>
</p>
    <ul>
       	<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
 $_smarty_tpl->tpl_vars['manufacturer']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->index++;
 $_smarty_tpl->tpl_vars['manufacturer']->first = $_smarty_tpl->tpl_vars['manufacturer']->index === 0;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['first'] = $_smarty_tpl->tpl_vars['manufacturer']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
           <?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['image']) {?>
        	   <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['last']) {?>last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['first']) {?>first_item<?php } else { ?>item<?php }?>">
                   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','sprintf'=>array($_smarty_tpl->tpl_vars['manufacturer']->value['name']),'mod'=>'mib'),$_smarty_tpl);?>
">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['image_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                   </a>
               </li>
           <?php }?>
    	<?php } ?>
    </ul>
</div><?php }} ?>
