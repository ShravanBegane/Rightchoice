<?php /* Smarty version Smarty-3.1.7, created on 2019-04-17 06:54:51
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:579255835cb6cdbb134007-67490033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '784087c27b0f7601fa1f073b1e637b08432efe01' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Quotes/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579255835cb6cdbb134007-67490033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb6cdbb13796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb6cdbb13796')) {function content_5cb6cdbb13796($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>