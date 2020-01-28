<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 02:45:19
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Webforms/DetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8097941425c72053fb20cb5-81919471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bee2d8a967fb62ac9a6f13e1931a263fba925ce' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Webforms/DetailView.tpl',
      1 => 1547807432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8097941425c72053fb20cb5-81919471',
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
  'unifunc' => 'content_5c72053fb5755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c72053fb5755')) {function content_5c72053fb5755($_smarty_tpl) {?>
<div class="detailViewContainer"><div class="col-sm-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeader.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('FieldsDetailView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</div></div></div></div><?php }} ?>