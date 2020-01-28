<?php /* Smarty version Smarty-3.1.7, created on 2019-02-27 11:58:09
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15905552315c767b510e0cb9-38210696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9519e505e73ca5a7e826b495e2badda37f1293' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15905552315c767b510e0cb9-38210696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'MODULE_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c767b510ed75',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c767b510ed75')) {function content_5c767b510ed75($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['QUICK_PREVIEW'] = new Smarty_variable("true", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>

<?php }} ?>