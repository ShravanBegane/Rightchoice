<?php /* Smarty version Smarty-3.1.7, created on 2020-02-26 04:54:05
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15750936565e55f9edc3b318-53100802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e103170394bc244af110ebe8d929062e387965' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1582691855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15750936565e55f9edc3b318-53100802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e55f9edc4666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e55f9edc4666')) {function content_5e55f9edc4666($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Powered by RightChoice - &nbsp;&nbsp;© <?php echo date('Y');?>
&nbsp;&nbsp;|
		<a href="https://rightchoice.io/" target="_blank">RightChoice</a>&nbsp;|&nbsp;
		<a href="#" target="_blank">Privacy Policy</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>