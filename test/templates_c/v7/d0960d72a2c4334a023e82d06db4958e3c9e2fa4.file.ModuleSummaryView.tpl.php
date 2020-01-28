<?php /* Smarty version Smarty-3.1.7, created on 2020-01-08 10:45:02
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18868773305c99d21a834001-24952698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0960d72a2c4334a023e82d06db4958e3c9e2fa4' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl',
      1 => 1578375671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18868773305c99d21a834001-24952698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c99d21a83830',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c99d21a83830')) {function content_5c99d21a83830($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>