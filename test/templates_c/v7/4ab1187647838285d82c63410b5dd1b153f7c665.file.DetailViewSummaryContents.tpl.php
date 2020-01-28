<?php /* Smarty version Smarty-3.1.7, created on 2019-04-18 23:55:10
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8032325415cb90e5e65dbd0-95809963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab1187647838285d82c63410b5dd1b153f7c665' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Invoice/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8032325415cb90e5e65dbd0-95809963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb90e5e660f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb90e5e660f1')) {function content_5cb90e5e660f1($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>