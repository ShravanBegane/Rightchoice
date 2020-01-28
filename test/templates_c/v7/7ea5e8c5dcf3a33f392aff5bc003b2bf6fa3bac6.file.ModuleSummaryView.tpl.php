<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 12:39:57
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3004451225c9172e084d3b7-71217120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ea5e8c5dcf3a33f392aff5bc003b2bf6fa3bac6' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Potentials/ModuleSummaryView.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3004451225c9172e084d3b7-71217120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c9172e085370',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9172e085370')) {function content_5c9172e085370($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>