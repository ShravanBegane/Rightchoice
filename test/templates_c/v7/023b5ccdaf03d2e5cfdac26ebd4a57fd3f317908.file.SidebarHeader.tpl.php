<?php /* Smarty version Smarty-3.1.7, created on 2020-01-09 08:16:50
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5616097975c8c283946eb66-84735184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '023b5ccdaf03d2e5cfdac26ebd4a57fd3f317908' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl',
      1 => 1578375671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5616097975c8c283946eb66-84735184',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c283947558',
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c283947558')) {function content_5c8c283947558($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php echo strtoupper(vtranslate("LBL_CALENDAR",$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
		<!--<span class="app-indicator-icon fa fa-calendar"></span>-->
		<span class="vicon-calendarlist"></span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>