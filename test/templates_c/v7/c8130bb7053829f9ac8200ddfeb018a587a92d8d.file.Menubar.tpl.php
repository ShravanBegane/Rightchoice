<?php /* Smarty version Smarty-3.1.7, created on 2020-01-09 08:16:50
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3786909365c8c28394c76d2-97902480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8130bb7053829f9ac8200ddfeb018a587a92d8d' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/partials/Menubar.tpl',
      1 => 1578375671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3786909365c8c28394c76d2-97902480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c28394e665',
  'variables' => 
  array (
    'MENU_STRUCTURE' => 0,
    'QUICK_LINKS' => 0,
    'SIDE_BAR_LINK' => 0,
    'CURRENT_LINK_NAME' => 0,
    'CURRENT_VIEW' => 0,
    'VIEW_ICON_CLASS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c28394e665')) {function content_5c8c28394e665($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["topMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getTop(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["moreMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getMore(), null, 0);?>
<div id="modules-menu" class="modules-menu">
	<ul>
	<?php  $_smarty_tpl->tpl_vars['SIDE_BAR_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->key => $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value){
$_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['CURRENT_LINK_NAME'] = new Smarty_variable("List", null, 0);?>
			<?php $_smarty_tpl->tpl_vars['VIEW_ICON_CLASS'] = new Smarty_variable("vicon-calendarlist", null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel')=='LBL_CALENDAR_VIEW'){?>
				<?php $_smarty_tpl->tpl_vars['CURRENT_LINK_NAME'] = new Smarty_variable("Calendar", null, 0);?>
				<?php $_smarty_tpl->tpl_vars['VIEW_ICON_CLASS'] = new Smarty_variable("fa fa-calendar", null, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel')=='LBL_SHARED_CALENDAR'){?>
				<?php $_smarty_tpl->tpl_vars['CURRENT_LINK_NAME'] = new Smarty_variable("SharedCalendar", null, 0);?>
				<?php $_smarty_tpl->tpl_vars['VIEW_ICON_CLASS'] = new Smarty_variable("vicon-sharedcalendar", null, 0);?>
			<?php }?>
			<li class="module-qtip <?php echo vtranslate($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel'),'Calendar');?>
 <?php if ($_smarty_tpl->tpl_vars['CURRENT_LINK_NAME']->value==$_smarty_tpl->tpl_vars['CURRENT_VIEW']->value){?>active<?php }?>" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel'),'Calendar');?>
">
				<a href="<?php echo $_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linkurl');?>
">
					<i class="<?php echo $_smarty_tpl->tpl_vars['VIEW_ICON_CLASS']->value;?>
"></i>
					<span><?php echo vtranslate($_smarty_tpl->tpl_vars['SIDE_BAR_LINK']->value->get('linklabel'),'Calendar');?>
</span>
				</a>
			</li>
		<?php } ?> 		
		
	</ul>
</div><?php }} ?>