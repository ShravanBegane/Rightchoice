<?php /* Smarty version Smarty-3.1.7, created on 2019-03-22 05:11:49
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Reports/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9813274785c946e951f9600-32285192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '693798bdbe474d450f099cfcb77ad1665f7d65f2' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Reports/EditHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9813274785c946e951f9600-32285192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LABELS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c946e951ff91',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c946e951ff91')) {function content_5c946e951ff91($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("step1"=>"LBL_REPORT_DETAILS","step2"=>"LBL_SELECT_COLUMNS","step3"=>"LBL_FILTERS"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>1,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>