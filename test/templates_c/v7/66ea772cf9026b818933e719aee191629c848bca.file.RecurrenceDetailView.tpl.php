<?php /* Smarty version Smarty-3.1.7, created on 2019-02-22 11:13:54
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8153920345c6fd9729bc618-88947319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ea772cf9026b818933e719aee191629c848bca' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8153920345c6fd9729bc618-88947319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECURRING_INFORMATION' => 0,
    'MODULE_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6fd9729ce69',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fd9729ce69')) {function content_5c6fd9729ce69($_smarty_tpl) {?>
<div id="addEventRepeatUI" data-recurring-enabled="<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck']=='Yes'){?>true<?php }else{ ?>false<?php }?>">
	<div><span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck'];?>
</span></div>
	<?php if ($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringcheck']=='Yes'){?>
	<div>
		<span><?php echo vtranslate('LBL_REPEATEVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_frequency'];?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringtype'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
	</div>
	<div>
		<span><?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['repeat_str'];?>
</span>
	</div>
	<div><?php echo vtranslate('LBL_UNTIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECURRING_INFORMATION']->value['recurringenddate'];?>
</div>
	<?php }?>
</div><?php }} ?>