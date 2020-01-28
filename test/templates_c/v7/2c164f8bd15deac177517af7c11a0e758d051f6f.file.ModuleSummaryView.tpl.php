<?php /* Smarty version Smarty-3.1.7, created on 2019-04-18 23:55:10
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Invoice/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12857916325cb90e5e656a93-41516029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c164f8bd15deac177517af7c11a0e758d051f6f' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Invoice/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12857916325cb90e5e656a93-41516029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb90e5e65a1c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb90e5e65a1c')) {function content_5cb90e5e65a1c($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>