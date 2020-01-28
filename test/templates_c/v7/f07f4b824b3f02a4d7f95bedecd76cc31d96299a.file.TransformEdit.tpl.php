<?php /* Smarty version Smarty-3.1.7, created on 2019-03-19 09:21:21
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Currency/TransformEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3916688865c90b491de7b25-65540496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07f4b824b3f02a4d7f95bedecd76cc31d96299a' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Currency/TransformEdit.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3916688865c90b491de7b25-65540496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'CURRENCY_ID' => 0,
    'CURRENCY_LIST' => 0,
    'CURRENCY_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c90b491df89f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90b491df89f')) {function content_5c90b491df89f($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['CURRENCY_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId(), null, 0);?><div class="currencyTransformModalContainer modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('LBL_TRANSFER_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-content"><form id="transformCurrency" class="form-horizontal" method="POST"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" /><div class="modal-body"><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_CURRENT_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls fieldValue col-xs-6"><span><?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_TRANSFER_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls fieldValue col-xs-6"><select class="select2 " name="transform_to_id"><?php  $_smarty_tpl->tpl_vars['CURRENCY_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['CURRENCY_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CURRENCY_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->key => $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value){
$_smarty_tpl->tpl_vars['CURRENCY_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['CURRENCY_ID']->value = $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>