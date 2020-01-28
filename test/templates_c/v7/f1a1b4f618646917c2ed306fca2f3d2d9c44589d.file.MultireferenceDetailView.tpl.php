<?php /* Smarty version Smarty-3.1.7, created on 2019-03-18 07:34:04
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9950838995c8f49ec9a1e35-40541928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a1b4f618646917c2ed306fca2f3d2d9c44589d' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9950838995c8f49ec9a1e35-40541928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_CONTACTS' => 0,
    'CONTACT_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8f49ec9bd90',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f49ec9bd90')) {function content_5c8f49ec9bd90($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['CONTACT_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CONTACT_INFO']->key => $_smarty_tpl->tpl_vars['CONTACT_INFO']->value){
$_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = true;
?><a href='<?php echo $_smarty_tpl->tpl_vars['CONTACT_INFO']->value['_model']->getDetailViewUrl();?>
' title='<?php echo vtranslate("Contacts","Contacts");?>
'> <?php echo Vtiger_Util_Helper::getRecordName($_smarty_tpl->tpl_vars['CONTACT_INFO']->value['id']);?>
</a><br><?php } ?><?php }} ?>