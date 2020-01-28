<?php /* Smarty version Smarty-3.1.7, created on 2019-03-17 23:11:20
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16800312655c8ed418bbc1f1-04458563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62a84eb833daa6935b4909720fe0f10cdb454fde' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16800312655c8ed418bbc1f1-04458563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'REMINDER_VALUES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8ed418bc5d0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ed418bc5d0')) {function content_5c8ed418bc5d0($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>