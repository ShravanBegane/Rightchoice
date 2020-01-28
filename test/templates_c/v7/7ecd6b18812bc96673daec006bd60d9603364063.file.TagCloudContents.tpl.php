<?php /* Smarty version Smarty-3.1.7, created on 2019-02-24 00:25:13
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6462517015c71e4696d65b7-97399049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ecd6b18812bc96673daec006bd60d9603364063' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/TagCloudContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6462517015c71e4696d65b7-97399049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAGS' => 0,
    'TAG_MODEL' => 0,
    'TAG_LABEL' => 0,
    'TAG_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c71e469786f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c71e469786f4')) {function content_5c71e469786f4($_smarty_tpl) {?>

<div class="tagsContainer" id="tagCloud"><?php  $_smarty_tpl->tpl_vars['TAG_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAG_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TAGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->key => $_smarty_tpl->tpl_vars['TAG_MODEL']->value){
$_smarty_tpl->tpl_vars['TAG_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAG_ID']->value = $_smarty_tpl->tpl_vars['TAG_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['TAG_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName(), null, 0);?><span class="tag" title="<?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><span class="tagName display-inline-block textOverflowEllipsis cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
</span></span><?php } ?></div><?php }} ?>