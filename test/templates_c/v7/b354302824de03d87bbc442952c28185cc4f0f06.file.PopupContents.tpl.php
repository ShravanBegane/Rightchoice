<?php /* Smarty version Smarty-3.1.7, created on 2020-07-13 04:11:26
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2207391885f0bdeee597050-72377420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b354302824de03d87bbc442952c28185cc4f0f06' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Inventory/PopupContents.tpl',
      1 => 1582691855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2207391885f0bdeee597050-72377420',
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
  'unifunc' => 'content_5f0bdeee5a17a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f0bdeee5a17a')) {function content_5f0bdeee5a17a($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupNavigation.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id='popupContentsDiv'><div class="row"><div class="col-md-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PopupEntries.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div>

<?php }} ?>