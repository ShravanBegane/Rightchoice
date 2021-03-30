<?php /* Smarty version Smarty-3.1.7, created on 2021-03-30 11:46:23
         compiled from "C:\xampp\htdocs\rightchoice\internalcrm\includes\runtime/../../layouts/v7\modules\Vtiger\dashboards\DashBoardContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13612811560630f8fd0b897-81102441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69608f6992293b00ccfff1d0be59da93bc823565' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rightchoice\\internalcrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\dashboards\\DashBoardContents.tpl',
      1 => 1582691855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13612811560630f8fd0b897-81102441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DASHBOARD_TABS' => 0,
    'TAB_DATA' => 0,
    'SELECTED_TAB' => 0,
    'MODULE' => 0,
    'DASHBOARD_TABS_LIMIT' => 0,
    'SELECTABLE_WIDGETS' => 0,
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'MINILISTWIDGET' => 0,
    'NOTEBOOKWIDGET' => 0,
    'MODULE_PERMISSION' => 0,
    'TABID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60630f8fdc834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60630f8fdc834')) {function content_60630f8fdc834($_smarty_tpl) {?>

    
<div class="dashBoardContainer clearfix"><div class="tabContainer"><ul class="nav nav-tabs tabs sortable container-fluid"><?php  $_smarty_tpl->tpl_vars['TAB_DATA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB_DATA']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_DATA']->key => $_smarty_tpl->tpl_vars['TAB_DATA']->value){
$_smarty_tpl->tpl_vars['TAB_DATA']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['TAB_DATA']->key;
?><li class="<?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"]==$_smarty_tpl->tpl_vars['SELECTED_TAB']->value){?>active<?php }?> dashboardTab" data-tabid="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabname="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
"><a data-toggle="tab" href="#tab_<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
"><div><span class="name textOverflowEllipsis" value="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
" style="width:10%"><strong><?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
</strong></span><span class="editTabName hide"><input type="text" name="tabName"/></span><?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["isdefault"]==0){?><i class="fa fa-close deleteTab"></i><?php }?><i class="fa fa-bars moveTab hide"></i></div></a></li><?php } ?></li><!-- <div class="moreSettings pull-right"><div class="dropdown dashBoardDropDown"><!--   <button class="btn btn-default reArrangeTabs dropdown-toggle" type="button" data-toggle="dropdown"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right moreDashBoards"><li id="newDashBoardLi"<?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value)==$_smarty_tpl->tpl_vars['DASHBOARD_TABS_LIMIT']->value){?>class="disabled"<?php }?>><a class = "addNewDashBoard" href="#"><?php echo vtranslate('LBL_ADD_NEW_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><li><a class = "reArrangeTabs" href="#"><?php echo vtranslate('LBL_REARRANGE_DASHBOARD_TABS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li></ul>--><!-- <button class="btn btn-default reArrangeTabs " type="button"><a class = "reArrangeTabs" href="#"><?php echo vtranslate('LBL_REARRANGE_DASHBOARD_TABS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></button></div> --><!--<button class="btn-success updateSequence pull-right hide"><?php echo vtranslate('LBL_SAVE_ORDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>--><!-- </div>--><div class="buttonGroups addwidget pull-right"><div class="btn-group"><?php if (count($_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value)>0){?><button class='btn btn-default addButton dropdown-toggle' data-toggle='dropdown'><?php echo vtranslate('LBL_ADD_WIDGET');?>
&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu dropdown-menu-right widgetsList pull-right" style="min-width:100%;text-align:left;"><?php $_smarty_tpl->tpl_vars["MINILISTWIDGET"] = new Smarty_variable('', null, 0);?><?php  $_smarty_tpl->tpl_vars['WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->key => $_smarty_tpl->tpl_vars['WIDGET']->value){
$_smarty_tpl->tpl_vars['WIDGET']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='MiniList'){?><?php $_smarty_tpl->tpl_vars["MINILISTWIDGET"] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value, null, 0);?> <?php }elseif($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='Notebook'){?><?php $_smarty_tpl->tpl_vars["NOTEBOOKWIDGET"] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value, null, 0);?> <?php }else{ ?><li><a onclick="Vtiger_DashBoard_Js.addWidget(this, '<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
')" href="javascript:void(0);"data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Home'){?><li class="divider"></li><li><a onclick="Vtiger_DashBoard_Js.addMiniListWidget(this, '<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"data-linkid="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getHeight();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><li><a onclick="Vtiger_DashBoard_Js.addNoteBookWidget(this, '<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"data-linkid="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getHeight();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php }?><li><a  href="index.php?module=Reports&view=List"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><?php echo vtranslate('Report');?>
</a><!--<a  href="index.php?module=Calendar&view=Calendar"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><?php echo vtranslate('Calendar');?>
</a>--><!--	<a  href="index.php?module=MailManager&view=List"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><?php echo vtranslate('Mail Settings');?>
</a><a  href="index.php?module=EmailTemplates&view=List&app=TOOLS"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"><?php echo vtranslate('Mail Templates');?>
</a>--></li></ul><?php }elseif($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value){?><button class='btn btn-default addButton dropdown-toggle' disabled="disabled" data-toggle='dropdown'><strong><?php echo vtranslate('LBL_ADD_WIDGET');?>
</strong> &nbsp;&nbsp;<i class="caret"></i></button><?php }?></div></div></ul><div class="tab-content"><?php  $_smarty_tpl->tpl_vars['TAB_DATA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB_DATA']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_DATA']->key => $_smarty_tpl->tpl_vars['TAB_DATA']->value){
$_smarty_tpl->tpl_vars['TAB_DATA']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['TAB_DATA']->key;
?><div id="tab_<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabid="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabname="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"]==$_smarty_tpl->tpl_vars['SELECTED_TAB']->value){?>in active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"]==$_smarty_tpl->tpl_vars['SELECTED_TAB']->value){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardTabContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TABID'=>$_smarty_tpl->tpl_vars['TABID']->value), 0);?>
<?php }?></div><?php } ?></div></div></div><?php }} ?>