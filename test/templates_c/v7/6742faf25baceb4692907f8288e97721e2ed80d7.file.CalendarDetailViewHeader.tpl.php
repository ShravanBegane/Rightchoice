<?php /* Smarty version Smarty-3.1.7, created on 2019-02-27 10:35:19
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1834133755c7667e7ab7593-74789040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6742faf25baceb4692907f8288e97721e2ed80d7' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834133755c7667e7ab7593-74789040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c7667e7ac12a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7667e7ac12a')) {function content_5c7667e7ac12a($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }} ?>