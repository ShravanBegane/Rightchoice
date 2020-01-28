<?php /* Smarty version Smarty-3.1.7, created on 2020-01-07 06:10:12
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8953019195c8b9df372d129-81996997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '706f2743691d6dd11c522d3bcc65ec1d2b295142' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl',
      1 => 1578375670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8953019195c8b9df372d129-81996997',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c8b9df37337b',
  'variables' => 
  array (
    'ACTIVE' => 0,
    'TAG_MODEL' => 0,
    'NO_EDIT' => 0,
    'NO_DELETE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b9df37337b')) {function content_5c8b9df37337b($_smarty_tpl) {?>
 
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