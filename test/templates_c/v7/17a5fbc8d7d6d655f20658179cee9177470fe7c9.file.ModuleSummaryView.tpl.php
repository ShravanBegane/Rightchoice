<?php /* Smarty version Smarty-3.1.7, created on 2019-07-31 07:22:00
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4118213815d414198b90f37-13067377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a5fbc8d7d6d655f20658179cee9177470fe7c9' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/SalesOrder/ModuleSummaryView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4118213815d414198b90f37-13067377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d414198b9e30',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d414198b9e30')) {function content_5d414198b9e30($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>