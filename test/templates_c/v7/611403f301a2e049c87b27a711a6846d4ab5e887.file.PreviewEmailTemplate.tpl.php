<?php /* Smarty version Smarty-3.1.7, created on 2019-03-17 05:48:44
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/EmailTemplates/PreviewEmailTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11167502955c8ddfbcca85e5-00442909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '611403f301a2e049c87b27a711a6846d4ab5e887' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/EmailTemplates/PreviewEmailTemplate.tpl',
      1 => 1547807433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11167502955c8ddfbcca85e5-00442909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_MODEL' => 0,
    'TEMPLATE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8ddfbccae2b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ddfbccae2b')) {function content_5c8ddfbccae2b($_smarty_tpl) {?>
<div id="templateContainer" class="fc-overlay-modal modal-content" style="max-height: 550px;"><div class="overlayHeader"><div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div></div><?php $_smarty_tpl->tpl_vars["TEMPLATE_NAME"] = new Smarty_variable(($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('templatename')), null, 0);?><?php $_smarty_tpl->tpl_vars["TEMPLATE_ID"] = new Smarty_variable(($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('templateid')), null, 0);?><div class="clearfix marginTop10px"><div class="col-lg-6"><h4><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_NAME']->value;?>
</h4></div></div></div></div><div class='modal-body' style="margin-bottom:60px;"><div class='datacontent container-fluid ' id='previewTemplateContainer'><iframe id="TemplateIFrame" class='overflowScrollBlock' style="height:450px;width: 100%;overflow-y: auto"></iframe></div></div></div>
<?php }} ?>