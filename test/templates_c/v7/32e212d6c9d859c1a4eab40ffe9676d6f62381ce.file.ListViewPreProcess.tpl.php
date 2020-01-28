<?php /* Smarty version Smarty-3.1.7, created on 2019-05-06 10:20:34
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Rss/ListViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8950645315c8c954732b913-06631179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e212d6c9d859c1a4eab40ffe9676d6f62381ce' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Rss/ListViewPreProcess.tpl',
      1 => 1557137456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8950645315c8c954732b913-06631179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c95473355d',
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'MODULE' => 0,
    'LEFTPANELHIDE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c95473355d')) {function content_5c8c95473355d($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
       
    </div>
</div>
</nav>
     <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<div class="main-container">
		<?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
        <div id="modnavigator" class="module-nav  hide ">
            <div class="hidden-xs hidden-sm mod-switcher-container">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>
        <div id="sidebar-essentials" class="sidebar-essentials <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> hide <?php }?>">
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('RssWidgetContents.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
            
        <div class="listViewPageDiv content-area <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?> full-width <?php }?>" id="listViewContent">
                
    
            
<?php }} ?>