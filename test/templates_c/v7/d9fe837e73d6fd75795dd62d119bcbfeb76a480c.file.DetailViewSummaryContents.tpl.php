<?php /* Smarty version Smarty-3.1.7, created on 2019-03-06 21:32:32
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12674928145c6fa4d35198f4-33221170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fe837e73d6fd75795dd62d119bcbfeb76a480c' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl',
      1 => 1551683854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12674928145c6fa4d35198f4-33221170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6fa4d351ffa',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fa4d351ffa')) {function content_5c6fa4d351ffa($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>