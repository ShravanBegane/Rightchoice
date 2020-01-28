<?php /* Smarty version Smarty-3.1.7, created on 2019-07-23 05:49:35
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5680049045d369fefbc27a5-68877612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baff65be1c486c5e8dc9d9f39c6f3dea68694425' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PurchaseOrder/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5680049045d369fefbc27a5-68877612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d369fefbc58e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d369fefbc58e')) {function content_5d369fefbc58e($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>