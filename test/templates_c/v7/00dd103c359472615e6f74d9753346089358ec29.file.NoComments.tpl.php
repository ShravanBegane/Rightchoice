<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 06:10:37
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17261639865c8b9df88ae195-39965823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dd103c359472615e6f74d9753346089358ec29' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17261639865c8b9df88ae195-39965823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8b9df88af55',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b9df88af55')) {function content_5c8b9df88af55($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>