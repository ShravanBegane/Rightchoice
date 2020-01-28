<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 06:11:43
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/dashboards/OpenTickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14626432065ca9e248d82169-31152382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4502a1a509dfe36662081c47e30ce8912478fb28' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/HelpDesk/dashboards/OpenTickets.tpl',
      1 => 1578375671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14626432065ca9e248d82169-31152382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ca9e248dc6d7',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ca9e248dc6d7')) {function content_5ca9e248dc6d7($_smarty_tpl) {?>
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