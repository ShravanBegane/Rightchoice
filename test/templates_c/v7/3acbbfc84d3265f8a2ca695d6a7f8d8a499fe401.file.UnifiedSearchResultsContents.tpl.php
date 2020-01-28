<?php /* Smarty version Smarty-3.1.7, created on 2019-03-19 11:57:04
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/UnifiedSearchResultsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15083681895c90d910a99269-26835337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3acbbfc84d3265f8a2ca695d6a7f8d8a499fe401' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/UnifiedSearchResultsContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15083681895c90d910a99269-26835337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c90d910a9fe8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90d910a9fe8')) {function content_5c90d910a9fe8($_smarty_tpl) {?>
<div class="col-lg-12 listViewPageDiv moduleSearchResults">
    <div class="row">
        <div class="col-lg-8">
            <h4 class="searchModuleHeader"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
        </div>
        <div class="col-lg-4 pull-right">
                <?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>

        </div>
    </div>
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SEARCH_MODE_RESULTS'=>true), 0);?>

    </div>
</div><?php }} ?>