<?php /* Smarty version Smarty-3.1.7, created on 2019-02-28 22:52:51
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ImageDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7893202125c786643030ad0-94219241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f376e76a9322e92d35e07896448a184ea1c2eaa' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ImageDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7893202125c786643030ad0-94219241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'IMAGE_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c786643203dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c786643203dd')) {function content_5c786643203dd($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['IMAGE_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD']->value->getImageDetails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->key => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value){
$_smarty_tpl->tpl_vars['IMAGE_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ITER']->value = $_smarty_tpl->tpl_vars['IMAGE_INFO']->key;
?>
	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'])&&!empty($_tmp1)){?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['path'];?>
_<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['orgname'];?>
" width="150" height="80">
	<?php }?>
<?php } ?><?php }} ?>