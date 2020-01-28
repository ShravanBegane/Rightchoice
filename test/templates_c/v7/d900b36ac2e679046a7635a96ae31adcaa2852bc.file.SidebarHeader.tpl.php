<?php /* Smarty version Smarty-3.1.7, created on 2019-03-04 08:46:27
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9769946685c6e7ae8d19da0-67125678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd900b36ac2e679046a7635a96ae31adcaa2852bc' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl',
      1 => 1551689168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9769946685c6e7ae8d19da0-67125678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e7ae8d297c',
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
    'APP_IMAGE_MAP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e7ae8d297c')) {function content_5c6e7ae8d297c($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php }elseif($_smarty_tpl->tpl_vars['MODULE']->value=='Leads'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
<?php }?>">
		<span class="app-indicator-icon fa <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Home'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> fa-dashboard <?php }elseif($_smarty_tpl->tpl_vars['MODULE']->value=='Leads'||!$_smarty_tpl->tpl_vars['MODULE']->value){?> vicon-leads <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value];?>
<?php }?>"></span>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>