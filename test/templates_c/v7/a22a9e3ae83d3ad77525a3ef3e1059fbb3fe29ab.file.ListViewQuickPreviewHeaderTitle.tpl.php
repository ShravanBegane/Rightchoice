<?php /* Smarty version Smarty-3.1.7, created on 2019-03-18 07:14:04
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12893752495c8f453c85b414-30397909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a22a9e3ae83d3ad77525a3ef3e1059fbb3fe29ab' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12893752495c8f453c85b414-30397909',
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
  'unifunc' => 'content_5c8f453c879c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f453c879c1')) {function content_5c8f453c879c1($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['QUICK_PREVIEW'] = new Smarty_variable("true", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>

<?php }} ?>