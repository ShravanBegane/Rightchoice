<?php /* Smarty version Smarty-3.1.7, created on 2019-02-22 07:29:24
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17262492965c6fa4d4dd7129-87161679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ecee6bf85cbd862262bc2dcb2eeee8c299be2c2' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17262492965c6fa4d4dd7129-87161679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6fa4d4ddc2f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6fa4d4ddc2f')) {function content_5c6fa4d4ddc2f($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>