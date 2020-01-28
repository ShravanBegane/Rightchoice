<?php /* Smarty version Smarty-3.1.7, created on 2019-07-31 07:22:00
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:368617425d414198ba6355-44516223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d73e4fcb39ae058b58c0b9c6ba775205c3ef06' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/SalesOrder/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '368617425d414198ba6355-44516223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d414198ba8f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d414198ba8f7')) {function content_5d414198ba8f7($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>