<?php /* Smarty version Smarty-3.1.7, created on 2019-03-18 07:34:04
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8681814135c8f49ec989342-12034158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5563580db8926230fefa8e13bdde62a4df343e' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/RecurrenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8681814135c8f49ec989342-12034158',
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
  'unifunc' => 'content_5c8f49ec99b64',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f49ec99b64')) {function content_5c8f49ec99b64($_smarty_tpl) {?>
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