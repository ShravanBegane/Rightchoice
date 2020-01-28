<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 04:09:56
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Tags/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:920846995c721914e2a261-76083373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90129b18a23ba26798d4577feb957f67d45dbe3' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Tags/ListViewRecordActions.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '920846995c721914e2a261-76083373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'RECORD_LINK' => 0,
    'RECORD_LINK_URL' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c721914e7c4d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c721914e7c4d')) {function content_5c721914e7c4d($_smarty_tpl) {?> 

<div style="width:60px">
	<?php  $_smarty_tpl->tpl_vars['RECORD_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->key => $_smarty_tpl->tpl_vars['RECORD_LINK']->value){
$_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["RECORD_LINK_URL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl(), null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon()=='icon-pencil'){?>
			&nbsp;<a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>>
				<i class="fa fa-pencil" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i>
			</a> &nbsp;
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon()=='icon-trash'){?>
			<a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>>
				<i class="fa fa-trash" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" ></i>
			</a>
		<?php }?>
	<?php } ?>
</div><?php }} ?>