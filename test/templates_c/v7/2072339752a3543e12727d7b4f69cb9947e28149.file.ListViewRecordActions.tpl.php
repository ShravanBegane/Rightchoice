<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 04:05:55
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4923391525c7218235e3f51-81973509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2072339752a3543e12727d7b4f69cb9947e28149' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/Workflows/ListViewRecordActions.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4923391525c7218235e3f51-81973509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c7218235ee46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7218235ee46')) {function content_5c7218235ee46($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div style="width:80px ;"><a class="deleteRecordButton" style=" opacity: 0; padding: 0 5px;"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a><input style="opacity: 0;" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')){?> checked value="on" <?php }else{ ?> value="off"<?php }?> data-on-color="success"  data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" type="checkbox" name="workflowstatus" id="workflowstatus"></div><?php }} ?>