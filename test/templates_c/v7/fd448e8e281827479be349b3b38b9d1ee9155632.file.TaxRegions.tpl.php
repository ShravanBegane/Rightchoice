<?php /* Smarty version Smarty-3.1.7, created on 2020-01-09 09:23:17
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/TaxRegions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12753179255cb55c60d17630-60238038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd448e8e281827479be349b3b38b9d1ee9155632' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Vtiger/TaxRegions.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12753179255cb55c60d17630-60238038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb55c60d24c7',
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'WIDTHTYPE' => 0,
    'TAX_REGIONS' => 0,
    'TAX_REGION_MODEL' => 0,
    'TAX_REGION_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb55c60d24c7')) {function content_5cb55c60d24c7($_smarty_tpl) {?>


<div class="taxRegionsContainer"><div class="tab-pane active"><div class="tab-content overflowVisible"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><div class="col-lg-4 marginLeftZero textOverflowEllipsis"><div class="marginBottom10px"><button type="button" class="btn btn-default addRegion addButton module-buttons" data-url="?module=Vtiger&parent=Settings&view=TaxAjax&mode=editTaxRegion" data-type="1"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_NEW_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><table class="table table-bordered taxRegionsTable" style="table-layout: fixed"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" colspan="2"><strong><?php echo vtranslate('LBL_AVAILABLE_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><tr><?php  $_smarty_tpl->tpl_vars['TAX_REGION_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TAX_REGIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->key => $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value){
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['TAX_REGION_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName(), null, 0);?><tr class="opacity" data-key-name="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
" data-key="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none;"><span class="taxRegionName"><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><div class="pull-right actions"><a class="editRegion" data-url='<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getEditRegionUrl();?>
'><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fa fa-pencil alignMiddle"></i></a>&nbsp;&nbsp;<a class="deleteRegion" data-url='<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getDeleteRegionUrl();?>
'><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a></div></td></tr><?php } ?></table></div><div class="col-lg-2">&nbsp;</div><div class="col-lg-7"><br><br><br><div class=""><div class="col-lg-1"><i class="fa fa-info-circle"></i></div><div class="col-lg-11"><?php echo vtranslate('LBL_TAX_REGION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div></div></div></div><?php }} ?>