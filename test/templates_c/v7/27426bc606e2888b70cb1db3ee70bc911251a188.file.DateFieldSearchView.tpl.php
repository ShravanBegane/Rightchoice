<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 09:03:01
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/DateFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7955380625c8c283951fdd1-82981776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27426bc606e2888b70cb1db3ee70bc911251a188' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/DateFieldSearchView.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7955380625c8c283951fdd1-82981776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c28395271f',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'USER_MODEL' => 0,
    'dateFormat' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c28395271f')) {function content_5c8c28395271f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars["dateFormat"] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'), null, 0);?><div class="row-fluid"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement dateField" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" data-calendar-type="range" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'  data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
"/></div><?php }} ?>