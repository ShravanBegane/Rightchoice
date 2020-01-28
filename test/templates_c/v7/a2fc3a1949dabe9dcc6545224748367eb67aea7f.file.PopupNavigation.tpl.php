<?php /* Smarty version Smarty-3.1.7, created on 2019-03-16 00:49:38
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/PopupNavigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4740044005c8c48221d1a47-99396355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2fc3a1949dabe9dcc6545224748367eb67aea7f' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/PopupNavigation.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4740044005c8c48221d1a47-99396355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MULTI_SELECT' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8c48221d8b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8c48221d8b0')) {function content_5c8c48221d8b0($_smarty_tpl) {?>

<div class="col-md-2"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value){?><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)){?><button class="select btn btn-default" disabled="disabled"><strong><?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><?php }else{ ?>&nbsp;<?php }?></div><div class="col-md-10"><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div><?php }} ?>