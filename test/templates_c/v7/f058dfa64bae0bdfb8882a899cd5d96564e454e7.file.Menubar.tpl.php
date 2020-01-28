<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 06:10:12
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17745339515c8b9df368e0f4-40385433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f058dfa64bae0bdfb8882a899cd5d96564e454e7' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17745339515c8b9df368e0f4-40385433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8b9df369a81',
  'variables' => 
  array (
    'MENU_STRUCTURE' => 0,
    'SELECTED_CATEGORY_MENU_LIST' => 0,
    'moduleModel' => 0,
    'moduleName' => 0,
    'translatedModuleLabel' => 0,
    'MODULE' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b9df369a81')) {function content_5c8b9df369a81($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value){?>
<?php $_smarty_tpl->tpl_vars["topMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getTop(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["moreMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getMore(), null, 0);?>

<div id="modules-menu" class="modules-menu">
	<?php  $_smarty_tpl->tpl_vars['moduleModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleModel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_CATEGORY_MENU_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleModel']->key => $_smarty_tpl->tpl_vars['moduleModel']->value){
$_smarty_tpl->tpl_vars['moduleModel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleModel']->key;
?>
		<?php $_smarty_tpl->tpl_vars['translatedModuleLabel'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value), null, 0);?>
		<ul title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
" class="module-qtip <?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
">
			<li <?php if ($_smarty_tpl->tpl_vars['MODULE']->value==$_smarty_tpl->tpl_vars['moduleName']->value){?>class="active"<?php }else{ ?>class=""<?php }?>>
				<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

					<span><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
				</a>
			</li>
		</ul>
	<?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['MODULE']->value!=='EmailTemplates'&&$_smarty_tpl->tpl_vars['MODULE']->value!=='HelpDesk'&&$_smarty_tpl->tpl_vars['MODULE']->value!=='Support'&&$_smarty_tpl->tpl_vars['MODULE']->value!=='Invoice'&&$_smarty_tpl->tpl_vars['MODULE']->value!=='PurchaseOrder'){?>
	<ul class="module-qtip" data-hasqtip="3" oldtitle="Opportunities" title="My360 Opportunity" aria-describedby="qtip-3">
		<li <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Potentials'){?>class="active"<?php }else{ ?>class=""<?php }?>>
				<a href="index.php?module=Potentials&view=List&app=MARKETING">
					<i class="vicon-potentials"></i>
					<span>Opportunities</span>
				</a>
			</li>
	</ul>
<?php }?>
 <?php if ($_smarty_tpl->tpl_vars['MODULE']->value==='HelpDesk'){?>


<ul class="module-qtip">
<li>									
<a href="index.php?module=MailManager&view=List" title="Mail Manager">
<i class="faicons fa fa-envelope" ></i>
<span>Mail Manager</span>
</a>
</li>

<li>
<a href="index.php?module=Calendar&view=List" title="Activities">
<i class="vicon-calendarlist" ></i>
<span>Activities</span>
</a>
</li>

<li>
<a href="index.php?module=Calendar&view=Calendar" title="Calendar">
<i class="fa fa-calendar" ></i>
<span>Calendar</span>
</a>
</li>
	
<?php }?>
</div>
<?php }?>
<?php }} ?>