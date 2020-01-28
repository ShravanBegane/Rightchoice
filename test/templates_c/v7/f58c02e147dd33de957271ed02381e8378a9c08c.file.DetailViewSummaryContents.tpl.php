<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 06:10:34
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Contacts/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14314949175c8b9df7429927-86702377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58c02e147dd33de957271ed02381e8378a9c08c' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Contacts/DetailViewSummaryContents.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14314949175c8b9df7429927-86702377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8b9df742b5f',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b9df742b5f')) {function content_5c8b9df742b5f($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>