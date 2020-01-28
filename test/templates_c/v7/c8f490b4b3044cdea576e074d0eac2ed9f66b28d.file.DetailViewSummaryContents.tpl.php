<?php /* Smarty version Smarty-3.1.7, created on 2019-03-15 22:41:22
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2557362185c8c2a12c1ac52-91853773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f490b4b3044cdea576e074d0eac2ed9f66b28d' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl',
      1 => 1551683854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2557362185c8c2a12c1ac52-91853773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c2a12c1c93',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c2a12c1c93')) {function content_5c8c2a12c1c93($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>