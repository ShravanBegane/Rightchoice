<?php /* Smarty version Smarty-3.1.7, created on 2019-04-08 00:41:25
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/MassEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16929271685caa98b5157f02-45872270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ad9f68e33d0d00a6c19f1fd7cbf4a76598d137' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/MassEditForm.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16929271685caa98b5157f02-45872270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'MASS_EDIT_FIELD_DETAILS' => 0,
    'massEditFields' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5caa98b516692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caa98b516692')) {function content_5caa98b516692($_smarty_tpl) {?>

<div class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('LBL_CHANGE_OWNER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>
<div class="modal-content"><form class="form-horizontal"  id="massSave" name="MassEdit" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
><?php $_smarty_tpl->tpl_vars['massEditFields'] = new Smarty_variable(array("assigned_user_id"=>$_smarty_tpl->tpl_vars['MASS_EDIT_FIELD_DETAILS']->value['assigned_user_id']), null, 0);?><input type="hidden" id="massEditFieldsNameList" data-value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['massEditFields']->value));?>
' /><div name='massEditContent'><div class="modal-body "><div class="form-group"><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule()->getField('assigned_user_id'), null, 0);?><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls col-sm-6"><input type="hidden" name="assigned_user_id_mass_edit_check" value="on"/><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value), 0);?>
</div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>