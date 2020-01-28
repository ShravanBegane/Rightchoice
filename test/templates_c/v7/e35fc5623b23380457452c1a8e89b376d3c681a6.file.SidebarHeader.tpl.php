<?php /* Smarty version Smarty-3.1.7, created on 2019-03-05 07:35:53
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8032925415c6e89f863a385-78860662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e35fc5623b23380457452c1a8e89b376d3c681a6' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Calendar/partials/SidebarHeader.tpl',
      1 => 1551771295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8032925415c6e89f863a385-78860662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e89f868532',
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e89f868532')) {function content_5c6e89f868532($_smarty_tpl) {?>

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