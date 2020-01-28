<?php /* Smarty version Smarty-3.1.7, created on 2019-07-23 05:49:35
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15257140235d369fefbb66c5-06516240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b97c831fd4b2de1ec694feed626c8d7d3b8897b' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PurchaseOrder/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15257140235d369fefbb66c5-06516240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d369fefbb9c6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d369fefbb9c6')) {function content_5d369fefbb9c6($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>