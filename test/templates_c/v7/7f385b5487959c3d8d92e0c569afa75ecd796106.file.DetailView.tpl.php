<?php /* Smarty version Smarty-3.1.7, created on 2019-04-27 06:14:10
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Webforms/DetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10115370255cc3f332a3c277-63585792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f385b5487959c3d8d92e0c569afa75ecd796106' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Webforms/DetailView.tpl',
      1 => 1547807432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10115370255cc3f332a3c277-63585792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc3f332a8246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc3f332a8246')) {function content_5cc3f332a8246($_smarty_tpl) {?>
<div class="detailViewContainer"><div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeader.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('FieldsDetailView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</div></div></div></div><?php }} ?>