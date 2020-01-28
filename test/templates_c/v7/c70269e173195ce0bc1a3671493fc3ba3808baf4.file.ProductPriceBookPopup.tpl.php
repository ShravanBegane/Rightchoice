<?php /* Smarty version Smarty-3.1.7, created on 2019-07-19 06:44:16
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PriceBooks/ProductPriceBookPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297034795d3166c0ccf865-95774277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c70269e173195ce0bc1a3671493fc3ba3808baf4' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/PriceBooks/ProductPriceBookPopup.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297034795d3166c0ccf865-95774277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SOURCE_MODULE' => 0,
    'PARENT_MODULE' => 0,
    'SOURCE_RECORD' => 0,
    'SOURCE_FIELD' => 0,
    'GETURL' => 0,
    'MULTI_SELECT' => 0,
    'CURRENCY_ID' => 0,
    'RELATED_PARENT_MODULE' => 0,
    'RELATED_PARENT_ID' => 0,
    'VIEW' => 0,
    'RELATION_ID' => 0,
    'POPUP_CLASS_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d3166c0d1fb7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3166c0d1fb7')) {function content_5d3166c0d1fb7($_smarty_tpl) {?>



<script type="text/javascript" src="<?php echo vresource_url('layouts/v7/modules/Products/resources/ProductsPopup.js');?>
"></script><div class="modal-dialog modal-lg"><div class="modal-content"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
<div class="modal-body"><div id="popupPageContainer" class="contentsDiv col-sm-12"><input type="hidden" id="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" id="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" id="sourceField" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
"/><input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['GETURL']->value;?>
" /><input type="hidden" id="multi_select" value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
" /><input type="hidden" id="currencyId" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" /><input type="hidden" id="relatedParentModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
"/><input type="hidden" id="relatedParentId" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
"/><input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"/><input type="hidden" id="relationId" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
" /><input type="hidden" id="selectedIds" name="selectedIds"><?php if (!empty($_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value)){?><input type="hidden" id="popUpClassName" value="<?php echo $_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value;?>
"/><?php }?><form id="popupPage" action="javascript:void(0)"><div id="popupContents" class=""><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ProductPriceBookPopupContents.tpl',$_smarty_tpl->tpl_vars['PARENT_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><input type="hidden" class="triggerEventName" value="<?php echo $_REQUEST['triggerEventName'];?>
"/></div></div></div></div>
<?php }} ?>