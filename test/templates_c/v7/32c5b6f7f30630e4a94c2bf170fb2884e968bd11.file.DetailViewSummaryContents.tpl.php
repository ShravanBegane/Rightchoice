<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 12:39:57
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9791831475c9172e0863b38-31323571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c5b6f7f30630e4a94c2bf170fb2884e968bd11' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Potentials/DetailViewSummaryContents.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9791831475c9172e0863b38-31323571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c9172e0866dd',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9172e0866dd')) {function content_5c9172e0866dd($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>