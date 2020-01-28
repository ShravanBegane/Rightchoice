<?php /* Smarty version Smarty-3.1.7, created on 2019-04-27 10:32:09
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19007399545cc42fa9457587-42722548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69bf5ab02ff03d0f955eea9bc0ac0f577b33f700' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl',
      1 => 1547807436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19007399545cc42fa9457587-42722548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc42fa945ab8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc42fa945ab8')) {function content_5cc42fa945ab8($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>