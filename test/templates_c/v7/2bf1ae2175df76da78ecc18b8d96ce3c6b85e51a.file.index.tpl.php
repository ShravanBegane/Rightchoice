<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 00:56:53
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/MailManager/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16593476045c71ebd594c590-42731362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf1ae2175df76da78ecc18b8d96ce3c6b85e51a' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/MailManager/index.tpl',
      1 => 1547807426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16593476045c71ebd594c590-42731362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
    'IS_MAILBOX_EXISTS' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c71ebd59796c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c71ebd59796c')) {function content_5c71ebd59796c($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MAILBOX']->value->exists(), null, 0);?><input type="hidden" id="isMailBoxExists" value="<?php if ($_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS']->value){?>1<?php }else{ ?>0<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS']->value){?><div class="mmDescription"><center><br><br><div><?php echo vtranslate('LBL_MODULE_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><br><br><button class="btn btn-success mailbox_setting"><strong><?php echo vtranslate('LBL_CONFIGURE_MAILBOX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></center></div><?php }else{ ?><div id="mailmanagerContainer" class="clearfix"><input type="hidden" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><div id="mails_container" class='col-lg-5'></div><div id="mailPreviewContainer" class="col-lg-7"><div class="mmListMainContainer"><center><strong><?php echo vtranslate('LBL_NO_MAIL_SELECTED_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></center></div></div></div><?php }?>
<?php }} ?>