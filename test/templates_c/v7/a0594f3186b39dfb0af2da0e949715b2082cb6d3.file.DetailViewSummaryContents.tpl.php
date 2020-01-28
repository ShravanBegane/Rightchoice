<?php /* Smarty version Smarty-3.1.7, created on 2020-01-08 10:45:02
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9527550385c99d21a85d141-80175399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0594f3186b39dfb0af2da0e949715b2082cb6d3' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl',
      1 => 1578375671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9527550385c99d21a85d141-80175399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c99d21a8611e',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c99d21a8611e')) {function content_5c99d21a8611e($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>