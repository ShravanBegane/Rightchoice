<?php /* Smarty version Smarty-3.1.7, created on 2019-02-21 10:18:06
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19947639305c6e7ade75bd04-39836064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d2cba59533446de0910bb78c565f19b7ecaff1' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1547813289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19947639305c6e7ade75bd04-39836064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e7ade76c18',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e7ade76c18')) {function content_5c6e7ade76c18($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Powered by My360CRM - &nbsp;&nbsp;© <?php echo date('Y');?>
&nbsp;&nbsp;|
		<a href="//my360crm.urldiary.com" target="_blank">My360CRM</a>&nbsp;|&nbsp;
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