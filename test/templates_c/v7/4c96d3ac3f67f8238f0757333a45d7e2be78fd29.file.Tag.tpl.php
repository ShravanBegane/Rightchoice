<?php /* Smarty version Smarty-3.1.7, created on 2019-02-21 10:18:22
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4194099125c6e7aee9eab09-76316448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c96d3ac3f67f8238f0757333a45d7e2be78fd29' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4194099125c6e7aee9eab09-76316448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVE' => 0,
    'TAG_MODEL' => 0,
    'NO_EDIT' => 0,
    'NO_DELETE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e7aee9fb9f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e7aee9fb9f')) {function content_5c6e7aee9fb9f($_smarty_tpl) {?>
 
 <span class="tag <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> active <?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId();?>
">
    <i class="activeToggleIcon fa <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> fa-circle-o <?php }else{ ?> fa-circle <?php }?>"></i>
    <span class="tagLabel display-inline-block textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
</span>
    <?php if (!$_smarty_tpl->tpl_vars['NO_EDIT']->value){?>
        <i class="editTag fa fa-pencil"></i>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['NO_DELETE']->value){?>
        <i class="deleteTag fa fa-times"></i>
    <?php }?>
</span><?php }} ?>