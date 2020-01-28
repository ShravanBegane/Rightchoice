<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 09:03:03
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Percentage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13156711505c90b20dec4e04-56021787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03bcd7b9c80747325d89d0abd9e4647e56fcbc8c' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Percentage.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13156711505c90b20dec4e04-56021787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c90b20def2a1',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'FIELD_VALUE' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90b20def2a1')) {function content_5c90b20def2a1($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><div class="input-group inputElement"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="form-control" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"value="<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)||$_smarty_tpl->tpl_vars['FIELD_VALUE']->value!=null){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
<?php }?>" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?> step="any"<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules="<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
"<?php }?>/><span class="input-group-addon">%</span></div>
<?php }} ?>