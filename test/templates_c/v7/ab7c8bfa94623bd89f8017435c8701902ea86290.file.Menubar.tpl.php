<?php /* Smarty version Smarty-3.1.7, created on 2019-03-13 21:30:00
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5037167255c6e7aee7b77b9-59431687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7c8bfa94623bd89f8017435c8701902ea86290' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl',
      1 => 1552476596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5037167255c6e7aee7b77b9-59431687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e7aee7d17a',
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
<?php if ($_valid && !is_callable('content_5c6e7aee7d17a')) {function content_5c6e7aee7d17a($_smarty_tpl) {?>

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
" class="module-qtip">
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
	<ul class="module-qtip" data-hasqtip="3" oldtitle="Opportunities" title="My360 Opportunity" aria-describedby="qtip-3">
		<li <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Potentials'){?>class="active"<?php }else{ ?>class=""<?php }?>>
				<a href="index.php?module=Potentials&view=List&app=MARKETING">
					<i class="vicon-potentials"></i>
					<span>Opportunities</span>
				</a>
			</li>
	</ul>
</div>
<?php }?>
<?php }} ?>