<?php /* Smarty version Smarty-3.1.7, created on 2019-02-27 00:14:37
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/HelpDesk/dashboards/OpenTickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3420250905c75d66d91a901-63203959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98ccd305bcd524e581c93b44dbc145147aa1e2d' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/HelpDesk/dashboards/OpenTickets.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3420250905c75d66d91a901-63203959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c75d66d9519d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c75d66d9519d')) {function content_5c75d66d9519d($_smarty_tpl) {?>
<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>


<script type="text/javascript">
	Vtiger_Pie_Widget_Js('Vtiger_OpenTickets_Widget_Js',{},{
		/**
		 * Function which will give chart related Data
		 */
		generateData : function() {
			var container = this.getContainer();
			var jData = container.find('.widgetData').val();
			var data = JSON.parse(jData);
			var chartData = [];
			for(var index in data) {
				var row = data[index];
				var rowData = [row.name, parseInt(row.count), row.id];
				chartData.push(rowData);
			}
			return {'chartData':chartData};
		}
	});
</script><?php }} ?>