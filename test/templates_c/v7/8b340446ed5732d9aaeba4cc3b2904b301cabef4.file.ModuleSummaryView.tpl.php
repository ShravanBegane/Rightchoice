<?php /* Smarty version Smarty-3.1.7, created on 2019-03-15 22:41:22
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18239010135c8c2a12bfab49-91380962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b340446ed5732d9aaeba4cc3b2904b301cabef4' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl',
      1 => 1551683868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18239010135c8c2a12bfab49-91380962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c2a12bfc8c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c2a12bfc8c')) {function content_5c8c2a12bfc8c($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>