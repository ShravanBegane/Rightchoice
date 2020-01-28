<?php /* Smarty version Smarty-3.1.7, created on 2019-03-25 09:07:30
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9447435455c989a52355ff7-33016874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072b433435139b505b467a380419b4b3a0edc3c5' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Google/map.tpl',
      1 => 1547807432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9447435455c989a52355ff7-33016874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SOURCE_MODULE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c989a5239e96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c989a5239e96')) {function content_5c989a5239e96($_smarty_tpl) {?>

<script type="text/javascript" src="layouts/v7/modules/Google/resources/Map.js"></script><div class="modal-dialog modal-lg mapcontainer"><div class="modal-content"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>vtranslate('LBL_GOOGLE_MAP',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value)), 0);?>
<div class="modal-body"><input type='hidden' id='record' value='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
' /><input type='hidden' id='source_module' value='<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
' /><input type="hidden" id="record_label" /><div id='mapCanvas'><span id='address' class='hide'></span>&nbsp;&nbsp;<i id = 'mapLink' class="fa fa-external-link cursorPointer"></i><br><br><div id="map_canvas" style="min-height: 400px;"></div></div></div></div></div><?php }} ?>