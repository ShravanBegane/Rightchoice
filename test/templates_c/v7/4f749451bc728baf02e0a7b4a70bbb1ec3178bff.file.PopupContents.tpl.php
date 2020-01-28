<?php /* Smarty version Smarty-3.1.7, created on 2019-04-16 10:48:31
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20804806875cb5b2ff087c52-35311950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f749451bc728baf02e0a7b4a70bbb1ec3178bff' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20804806875cb5b2ff087c52-35311950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb5b2ff0915a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb5b2ff0915a')) {function content_5cb5b2ff0915a($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupNavigation.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id='popupContentsDiv'><div class="row"><div class="col-md-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div>

<?php }} ?>