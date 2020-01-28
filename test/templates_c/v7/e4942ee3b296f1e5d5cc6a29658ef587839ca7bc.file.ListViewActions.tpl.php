<?php /* Smarty version Smarty-3.1.7, created on 2019-03-16 06:18:48
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Portal/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1154578525c8c9548f033b2-95876841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4942ee3b296f1e5d5cc6a29658ef587839ca7bc' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Portal/ListViewActions.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1154578525c8c9548f033b2-95876841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c9548f09a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c9548f09a8')) {function content_5c8c9548f09a8($_smarty_tpl) {?>






<div class="listViewActionsContainer" id="listview-actions"><div class="row"><div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"><div class="btn-group col-md-3" role="group" araia-label="Portal actions"><button type="button" class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listview_massAction" onclick="Portal_List_Js.massDeleteRecords()" disabled="disabled"><i class="fa fa-trash"></i></button></div><div class="col-md-6"><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="selectAllMsgDiv"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount" value=""></span>)</a></center></div><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="deSelectAllMsgDiv"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div></div><div class="col-md-3"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div></div></div></div>            <?php }} ?>