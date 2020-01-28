<?php /* Smarty version Smarty-3.1.7, created on 2019-03-20 04:25:39
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/MailManager/MailManagerCommentWidget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739840815c91c0c3f2a848-59978346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777c9ecab424256e00abd335ebec86d00cc132fa' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/MailManager/MailManagerCommentWidget.tpl',
      1 => 1547807426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739840815c91c0c3f2a848-59978346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PARENT' => 0,
    'LINKMODULE' => 0,
    'MSGNO' => 0,
    'FOLDER' => 0,
    'MODULE' => 0,
    'COMMENT_TEXTAREA_DEFAULT_ROWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c91c0c3f35a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c91c0c3f35a7')) {function content_5c91c0c3f35a7($_smarty_tpl) {?>
<div class="modal-dialog"><div class="modal-content"><input type=hidden name="_mlinkto" value="<?php echo $_smarty_tpl->tpl_vars['PARENT']->value;?>
"><input type=hidden name="_mlinktotype" value="<?php echo $_smarty_tpl->tpl_vars['LINKMODULE']->value;?>
"><input type=hidden name="_msgno" value="<?php echo $_smarty_tpl->tpl_vars['MSGNO']->value;?>
"><input type=hidden name="_folder" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>vtranslate('LBL_MAILMANAGER_ADD_ModComments',$_smarty_tpl->tpl_vars['MODULE']->value)), 0);?>
<div class="modal-body" id='commentContainer'><div class="container-fluid"><div class="row" id="mass_action_add_comment"><textarea class="col-lg-12" name="commentcontent" id="commentcontent" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
" placeholder="<?php echo vtranslate('LBL_WRITE_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." data-rule-required="true"></textarea></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>