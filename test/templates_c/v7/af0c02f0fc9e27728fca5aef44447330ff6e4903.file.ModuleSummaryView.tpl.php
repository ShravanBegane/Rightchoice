<?php /* Smarty version Smarty-3.1.7, created on 2019-03-04 06:22:41
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8262000795c713506538b57-51419283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af0c02f0fc9e27728fca5aef44447330ff6e4903' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl',
      1 => 1551412815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8262000795c713506538b57-51419283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c713506542e5',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c713506542e5')) {function content_5c713506542e5($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>