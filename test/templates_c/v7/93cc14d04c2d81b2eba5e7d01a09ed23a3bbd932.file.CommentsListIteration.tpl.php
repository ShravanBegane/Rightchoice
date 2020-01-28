<?php /* Smarty version Smarty-3.1.7, created on 2019-03-19 05:48:34
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/CommentsListIteration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12016638705c9082b2cff751-91432980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93cc14d04c2d81b2eba5e7d01a09ed23a3bbd932' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/CommentsListIteration.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12016638705c9082b2cff751-91432980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHILD_COMMENTS_MODEL' => 0,
    'COMMENT' => 0,
    'CHILD_COMMENTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c9082b2d084a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9082b2d084a')) {function content_5c9082b2d084a($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value)){?><ul class="unstyled"><?php  $_smarty_tpl->tpl_vars['COMMENT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['COMMENT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['COMMENT']->key => $_smarty_tpl->tpl_vars['COMMENT']->value){
$_smarty_tpl->tpl_vars['COMMENT']->_loop = true;
?><li class="commentDetails" <?php if ($_smarty_tpl->tpl_vars['COMMENT']->value->get('is_private')){?>style="background: #fff9ea;"<?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommentThreadList.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COMMENT'=>$_smarty_tpl->tpl_vars['COMMENT']->value), 0);?>
<?php $_smarty_tpl->tpl_vars['CHILD_COMMENTS'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_COMMENTS']->value)){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommentsListIteration.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('CHILD_COMMENTS_MODEL'=>$_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments()), 0);?>
<?php }?></li><br><?php } ?></ul><?php }?><?php }} ?>