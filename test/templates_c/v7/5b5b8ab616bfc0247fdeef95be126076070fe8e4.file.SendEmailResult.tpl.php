<?php /* Smarty version Smarty-3.1.7, created on 2019-03-20 07:50:36
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443718895c8ba1d1aadd78-53461720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5b8ab616bfc0247fdeef95be126076070fe8e4' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl',
      1 => 1553068048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443718895c8ba1d1aadd78-53461720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8ba1d1ab703',
  'variables' => 
  array (
    'MODULE' => 0,
    'SUCCESS' => 0,
    'FLAG' => 0,
    'RELATED_LOAD' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ba1d1ab703')) {function content_5c8ba1d1ab703($_smarty_tpl) {?>




<div class="modal-dialog">
	<div class="modal-content">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>"Result"), 0);?>
 
		<div class="modal-body">
			<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['FLAG']->value=="SENT"){?>
				<div class="mailSentSuccessfully" data-relatedload="<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
">
					<?php echo vtranslate('LBL_MAIL_SENT_SUCCESSFULLY');?>

				</div>
				<?php }elseif($_smarty_tpl->tpl_vars['FLAG']->value=="SAVED"){?>
				<div class="maildraftSuccessfully" data-relatedload="<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
">
					Mail drafted successfully				
				</div>
				<?php }?>
				
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