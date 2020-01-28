<?php /* Smarty version Smarty-3.1.7, created on 2019-03-14 18:49:26
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13693944475c8a1596a3c849-51552028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5754cb6504ef28530369f586d0db6a49bfac2aa3' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/IndexViewPreProcess.tpl',
      1 => 1547807433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13693944475c8a1596a3c849-51552028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8a1596b6ef0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8a1596b6ef0')) {function content_5c8a1596b6ef0($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php $_smarty_tpl->tpl_vars['ACTIVE_BLOCK'] = new Smarty_variable(array('block'=>'Templates','menu'=>$_smarty_tpl->tpl_vars['smary']->value['request']['module']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/ModuleHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
 <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<?php }} ?>