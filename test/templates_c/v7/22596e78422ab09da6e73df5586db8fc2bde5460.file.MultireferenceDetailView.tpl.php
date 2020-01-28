<?php /* Smarty version Smarty-3.1.7, created on 2019-02-22 11:13:54
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10852534515c6fd9729d57d5-80899518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22596e78422ab09da6e73df5586db8fc2bde5460' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Events/uitypes/MultireferenceDetailView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10852534515c6fd9729d57d5-80899518',
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
  'unifunc' => 'content_5c6fd9729e0a4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fd9729e0a4')) {function content_5c6fd9729e0a4($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['CONTACT_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_CONTACTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CONTACT_INFO']->key => $_smarty_tpl->tpl_vars['CONTACT_INFO']->value){
$_smarty_tpl->tpl_vars['CONTACT_INFO']->_loop = true;
?><a href='<?php echo $_smarty_tpl->tpl_vars['CONTACT_INFO']->value['_model']->getDetailViewUrl();?>
' title='<?php echo vtranslate("Contacts","Contacts");?>
'> <?php echo Vtiger_Util_Helper::getRecordName($_smarty_tpl->tpl_vars['CONTACT_INFO']->value['id']);?>
</a><br><?php } ?><?php }} ?>