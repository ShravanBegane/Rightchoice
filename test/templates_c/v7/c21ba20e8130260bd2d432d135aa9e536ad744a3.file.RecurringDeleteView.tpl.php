<?php /* Smarty version Smarty-3.1.7, created on 2019-06-02 03:43:16
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/RecurringDeleteView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15882305195cf345d48e9740-42213393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21ba20e8130260bd2d432d135aa9e536ad744a3' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Calendar/RecurringDeleteView.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15882305195cf345d48e9740-42213393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cf345d494b38',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf345d494b38')) {function content_5cf345d494b38($_smarty_tpl) {?>


<!--Confirmation modal for updating Recurring Events--><?php $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_variable("Calendar", null, 0);?><div class="modal-dialog modelContainer modal-content" style='min-width:350px;'><?php ob_start();?><?php echo vtranslate('LBL_DELETE_RECURRING_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="container-fluid"><div class="row" style="padding: 1%;padding-left: 3%;"><?php echo vtranslate('LBL_DELETE_RECURRING_EVENTS_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default onlyThisEvent" style="width : 150px"><?php echo vtranslate('LBL_ONLY_THIS_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ONLY_THIS_EVENT_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default futureEvents" style="width : 150px"><?php echo vtranslate('LBL_FUTURE_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_FUTURE_EVENTS_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn btn-default allEvents" style="width : 150px"><?php echo vtranslate('LBL_ALL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ALL_EVENTS_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div></div></div></div><!--Confirmation modal for updating Recurring Events--><?php }} ?>