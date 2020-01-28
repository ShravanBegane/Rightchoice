<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 00:25:13
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloud.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18766676935c71e4695a67e1-42982757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063c9834c37bd885a66cdd2e42c80667b9975ce9' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloud.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18766676935c71e4695a67e1-42982757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c71e4696cdd0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c71e4696cdd0')) {function content_5c71e4696cdd0($_smarty_tpl) {?>
<div class="dashboardWidgetHeader"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="dashboardWidgetContent" style='padding:5px'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="widgeticons dashBoardWidgetFooter"><div class="footerIcons pull-right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div>	 <?php }} ?>