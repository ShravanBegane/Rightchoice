<?php /* Smarty version Smarty-3.1.7, created on 2019-02-22 07:02:07
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17112954025c6f9e6f6d7c22-07597935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01614cb712990180874f0bf7489a753b8cd14c4a' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/ReminderDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17112954025c6f9e6f6d7c22-07597935',
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
  'unifunc' => 'content_5c6f9e6f6e8a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6f9e6f6e8a8')) {function content_5c6f9e6f6e8a8($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?>
    <?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['REMINDER_VALUES']->value;?>
<?php echo vtranslate('LBL_BEFORE_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

<?php }?><?php }} ?>