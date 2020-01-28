<?php /* Smarty version Smarty-3.1.7, created on 2019-07-08 22:05:19
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/NotAccessible.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8810056645d23be1f0a01f5-54148237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d75becff7a5ecde35181edeedf8ede24080f47' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Vtiger/NotAccessible.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8810056645d23be1f0a01f5-54148237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'TITLE' => 0,
    'BODY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d23be1f0b49b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d23be1f0b49b')) {function content_5d23be1f0b49b($_smarty_tpl) {?>
<div id="sendSmsContainer" class='modal-xs modal-dialog'>
    <div class = "modal-content">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>


        <div class="modal-body">
        	<?php echo $_smarty_tpl->tpl_vars['BODY']->value;?>

    	</div>

    	<div class="modal-footer">
    	</div>
    </div>
</div><?php }} ?>