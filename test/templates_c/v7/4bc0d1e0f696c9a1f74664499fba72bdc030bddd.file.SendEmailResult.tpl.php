<?php /* Smarty version Smarty-3.1.7, created on 2019-03-13 16:01:01
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4584902775c889c9db325d6-82974816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc0d1e0f696c9a1f74664499fba72bdc030bddd' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4584902775c889c9db325d6-82974816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SUCCESS' => 0,
    'RELATED_LOAD' => 0,
    'FLAG' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c889c9db7065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c889c9db7065')) {function content_5c889c9db7065($_smarty_tpl) {?>




<div class="modal-dialog">
	<div class="modal-content">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>"Result"), 0);?>
 
		<div class="modal-body">
			<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
				<div class="mailSentSuccessfully" data-relatedload="<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
">
					<?php echo vtranslate('LBL_MAIL_SENT_SUCCESSFULLY');?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['FLAG']->value){?>
					<input type="hidden" id="flag" value="<?php echo $_smarty_tpl->tpl_vars['FLAG']->value;?>
">
				<?php }?>
			<?php }else{ ?>
				<div class="failedToSend" data-relatedload="false">
					<?php echo vtranslate('LBL_FAILED_TO_SEND');?>

					<br>
					<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>