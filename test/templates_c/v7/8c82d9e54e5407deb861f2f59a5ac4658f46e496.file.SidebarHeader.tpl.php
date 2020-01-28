<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 02:51:52
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18682353025c7206c821bc40-94206780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c82d9e54e5407deb861f2f59a5ac4658f46e496' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Settings/ExtensionStore/partials/SidebarHeader.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18682353025c7206c821bc40-94206780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c7206c82299b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7206c82299b')) {function content_5c7206c82299b($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container extensionstore app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"> 
    <div class="row" title="<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:ExtensionStore');?>
"> 
        <span class="app-indicator-icon cursorPointer fa fa-shopping-cart"></span> 
    </div>
</div>
  
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>