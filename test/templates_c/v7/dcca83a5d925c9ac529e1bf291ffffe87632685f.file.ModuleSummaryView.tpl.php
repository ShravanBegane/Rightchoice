<?php /* Smarty version Smarty-3.1.7, created on 2019-02-26 23:07:47
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3715867005c75c6c3ec8667-97283019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcca83a5d925c9ac529e1bf291ffffe87632685f' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Accounts/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3715867005c75c6c3ec8667-97283019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c75c6c3ed0fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c75c6c3ed0fa')) {function content_5c75c6c3ed0fa($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>