<?php /* Smarty version Smarty-3.1.7, created on 2019-02-21 11:31:14
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Users/DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6253584265c6e8c02717e49-41027649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c525ab852d4cf8db4687e1f27491e91e526c3583' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Users/DetailViewFullContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6253584265c6e8c02717e49-41027649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'NAME_FIELDS' => 0,
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e8c0272976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e8c0272976')) {function content_5c6e8c0272976($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable(array('first_name','last_name'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(), null, 0);?><?php }?><form id="detailView" data-name-fields='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['NAME_FIELDS']->value);?>
' method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>