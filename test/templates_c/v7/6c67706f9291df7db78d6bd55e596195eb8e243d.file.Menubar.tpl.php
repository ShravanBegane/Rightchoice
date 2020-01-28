<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 00:56:53
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14973178785c71ebd593d075-51348342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c67706f9291df7db78d6bd55e596195eb8e243d' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/MailManager/partials/Menubar.tpl',
      1 => 1547807426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14973178785c71ebd593d075-51348342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c71ebd594903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c71ebd594903')) {function content_5c71ebd594903($_smarty_tpl) {?>
<div id="modules-menu" class="modules-menu mmModulesMenu" style="width: 100%;"><div><span><?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->username();?>
</span><span class="pull-right"><span class="cursorPointer mailbox_refresh" title="<?php echo vtranslate('LBL_Refresh',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-refresh"></i></span>&nbsp;<span class="cursorPointer mailbox_setting" title="<?php echo vtranslate('JSLBL_Settings',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-cog"></i></span></span></div><div id="mail_compose" class="cursorPointer"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo vtranslate('LBL_Compose',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id='folders_list'></div></div><?php }} ?>