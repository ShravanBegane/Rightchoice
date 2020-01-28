<?php /* Smarty version Smarty-3.1.7, created on 2019-03-10 20:14:45
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Accounts/AccountHierarchy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4139861015c84e39535bb69-39553074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c28fae2c057f735e38b8e7cf54de3b2615927ee2' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Accounts/AccountHierarchy.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4139861015c84e39535bb69-39553074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'ACCOUNT_HIERARCHY' => 0,
    'HEADERNAME' => 0,
    'ENTRIES' => 0,
    'LISTFIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c84e39539e50',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c84e39539e50')) {function content_5c84e39539e50($_smarty_tpl) {?>

<div class="modal-dialog modal-lg"><div id="accountHierarchyContainer" class="modelContainer modal-content" style='min-width:750px'><?php ob_start();?><?php echo vtranslate('LBL_SHOW_ACCOUNT_HIERARCHY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div id ="hierarchyScroll" style="margin-right: 8px;"><table class="table table-bordered"><thead><tr class="blockHeader"><?php  $_smarty_tpl->tpl_vars['HEADERNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADERNAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNT_HIERARCHY']->value['header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADERNAME']->key => $_smarty_tpl->tpl_vars['HEADERNAME']->value){
$_smarty_tpl->tpl_vars['HEADERNAME']->_loop = true;
?><th><?php echo vtranslate($_smarty_tpl->tpl_vars['HEADERNAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['ENTRIES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ENTRIES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNT_HIERARCHY']->value['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ENTRIES']->key => $_smarty_tpl->tpl_vars['ENTRIES']->value){
$_smarty_tpl->tpl_vars['ENTRIES']->_loop = true;
?><tbody><tr><?php  $_smarty_tpl->tpl_vars['LISTFIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTFIELDS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTFIELDS']->key => $_smarty_tpl->tpl_vars['LISTFIELDS']->value){
$_smarty_tpl->tpl_vars['LISTFIELDS']->_loop = true;
?><td><?php echo $_smarty_tpl->tpl_vars['LISTFIELDS']->value;?>
</td><?php } ?></tr></tbody><?php } ?></table></div></div><div class="modal-footer"><div class="pull-right cancelLinkContainer"><button class="btn btn-primary" type="reset" data-dismiss="modal"><strong><?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div><?php }} ?>