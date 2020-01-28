<?php /* Smarty version Smarty-3.1.7, created on 2019-04-17 06:54:51
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Quotes/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21454750415cb6cdbb11f311-04242617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9605cbe12bc144cdfe31f405b77c9651d633fbad' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Quotes/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21454750415cb6cdbb11f311-04242617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb6cdbb12275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb6cdbb12275')) {function content_5cb6cdbb12275($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>