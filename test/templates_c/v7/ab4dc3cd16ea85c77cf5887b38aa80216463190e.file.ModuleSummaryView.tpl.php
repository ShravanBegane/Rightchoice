<?php /* Smarty version Smarty-3.1.7, created on 2019-04-27 10:32:09
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10302555535cc42fa940a934-77018957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab4dc3cd16ea85c77cf5887b38aa80216463190e' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl',
      1 => 1547807436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10302555535cc42fa940a934-77018957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cc42fa943b6f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc42fa943b6f')) {function content_5cc42fa943b6f($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>