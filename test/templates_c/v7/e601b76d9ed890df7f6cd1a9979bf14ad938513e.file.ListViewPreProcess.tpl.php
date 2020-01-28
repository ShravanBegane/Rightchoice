<?php /* Smarty version Smarty-3.1.7, created on 2019-02-25 04:44:39
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/ListViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9816615595c7372b778d3d0-66775589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e601b76d9ed890df7f6cd1a9979bf14ad938513e' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/ListViewPreProcess.tpl',
      1 => 1547807433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9816615595c7372b778d3d0-66775589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c7372b78da8c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7372b78da8c')) {function content_5c7372b78da8c($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'><div class="data"></div><div class="modal-dialog"></div></div><div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><div id="modnavigator" class="module-nav"><div class="hidden-xs hidden-sm mod-switcher-container"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="listViewPageDiv content-area full-width" id="listViewContent"><?php }} ?>