<?php /* Smarty version Smarty-3.1.7, created on 2019-03-06 21:32:32
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20149445985c6fa4d3483cc1-87068951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0144a06d930ba4c96dfde79f05e13140e655cf17' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl',
      1 => 1551683868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20149445985c6fa4d3483cc1-87068951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6fa4d348a23',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fa4d348a23')) {function content_5c6fa4d348a23($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>