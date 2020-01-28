<?php /* Smarty version Smarty-3.1.7, created on 2019-03-13 16:00:13
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12805707675c889c6dadc668-99960308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '498908950509d6ee3f09fbac9d908c84500f5c92' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl',
      1 => 1547807433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12805707675c889c6dadc668-99960308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c889c6db1772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c889c6db1772')) {function content_5c889c6db1772($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>
<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div>
<div class="container-fluid main-container">
	<div class="row">
		<div id="modnavigator" class="module-nav detailViewModNavigator clearfix">
			<div class="hidden-xs hidden-sm mod-switcher-container">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class="detailViewContainer viewContent clearfix">
			<div class="content-area container-fluid">
<?php }} ?>