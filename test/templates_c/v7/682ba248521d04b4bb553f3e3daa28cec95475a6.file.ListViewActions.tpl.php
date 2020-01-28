<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 20:33:57
         compiled from "/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6311973585c6e7aeebf71c2-18755654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682ba248521d04b4bb553f3e3daa28cec95475a6' => 
    array (
      0 => '/home/urldiary/my360crm.urldiary.com/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewActions.tpl',
      1 => 1552386834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6311973585c6e7aeebf71c2-18755654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c6e7aeecc4ca',
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_MASSACTIONS' => 0,
    'LIST_MASSACTION' => 0,
    'LISTVIEW_MASSACTIONS_1' => 0,
    'editAction' => 0,
    'deleteAction' => 0,
    'commentAction' => 0,
    'LISTVIEW_LINKS' => 0,
    'LISTVIEW_ADVANCEDACTIONS' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'REQUEST_INSTANCE' => 0,
    'VIEWID' => 0,
    'CUSTOM_VIEWS' => 0,
    'FILTER_TYPES' => 0,
    'FILTERS' => 0,
    'MODULE_MODEL' => 0,
    'DEFAULT_FILTER_ID' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'CVNAME' => 0,
    'DEFAULT_FILTER_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6e7aeecc4ca')) {function content_5c6e7aeecc4ca($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MODULE']->value==='Calendar'){?><style>ul.calender-list{display: flex;list-style: none;}ul.calender-list a{font-size: 14px;margin-left: 21px;}</style><ul class="calender-list"><li><a class="new-button new-button-green"  data-test="New" href="index.php?module=Calendar&view=Edit&mode=Calendar&__vtrftk=sid%3A7722fa827d99ad3f7270176d81071396c4e9a5d9%2C1551339058&calendarModule=Calendar&defaultCallDuration=5&defaultOtherEventDuration=5&record=&subject=&date_start=28-02-2019&time_start=05%3A30+PM&due_date=28-02-2019&assigned_user_id=1&taskstatus="><span style="text-color:white;">New</span></a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B"activitytype"%2C"e"%2C"Task%2CTask"%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B"taskstatus"%2C"activitytype"null"subject"%2C"parent_id"%2C"date_start"%2C"due_date"%2C"assigned_user_id"%5D&tag="</li>All Activities</a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Call%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-phone" aria-hidden="true"></i> Call </a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Meeting%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-users" aria-hidden="true"></i> Meeting</a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Task%2CTask%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-clock-o" aria-hidden="true"></i> Task</a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Demo+Locked+in%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-lock" aria-hidden="true"></i> Demo Locked In</a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Email%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=subject&sortorder=DESC&app=MARKETING&search_params=%5B%5B%5B%22activitytype%22%2C%22e%22%2C%22Mobile+Call%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B%22taskstatus%22%2C%22activitytype%22%2C%22subject%22%2C%22parent_id%22%2C%22date_start%22%2C%22due_date%22%2C%22assigned_user_id%22%5D&tag="><i class="fa fa-mobile" aria-hidden="true"></i> Mobile Call</a></li></ul><?php }?><?php $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1'] = new Smarty_variable(array(), null, 0);?><div id="listview-actions" class="listview-actions-container"><?php  $_smarty_tpl->tpl_vars['LIST_MASSACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LIST_MASSACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LIST_MASSACTION']->key => $_smarty_tpl->tpl_vars['LIST_MASSACTION']->value){
$_smarty_tpl->tpl_vars['LIST_MASSACTION']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value->getLabel()=='LBL_EDIT'){?><?php $_smarty_tpl->tpl_vars['editAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value->getLabel()=='LBL_DELETE'){?><?php $_smarty_tpl->tpl_vars['deleteAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value->getLabel()=='LBL_ADD_COMMENT'){?><?php $_smarty_tpl->tpl_vars['commentAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value,$_smarty_tpl->tpl_vars['LIST_MASSACTION']->value), null, 0);?><?php }?><?php } ?><div class = "row"><div class=" col-md-3"><div class="btn-group listViewActionsContainer" role="group" aria-label="..."><?php if ($_smarty_tpl->tpl_vars['editAction']->value){?><button type="button" class="btn btn-default" id=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo $_smarty_tpl->tpl_vars['editAction']->value->getLabel();?>
<?php if (stripos($_smarty_tpl->tpl_vars['editAction']->value->getUrl(),'javascript:')===0){?> href="javascript:void(0);" onclick='<?php echo substr($_smarty_tpl->tpl_vars['editAction']->value->getUrl(),strlen("javascript:"));?>
'<?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['editAction']->value->getUrl();?>
' <?php }?> title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" disabled="disabled"><i class="fa fa-pencil"></i></button><?php }?><?php if ($_smarty_tpl->tpl_vars['deleteAction']->value){?><button type="button" class="btn btn-default" id=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo $_smarty_tpl->tpl_vars['deleteAction']->value->getLabel();?>
<?php if (stripos($_smarty_tpl->tpl_vars['deleteAction']->value->getUrl(),'javascript:')===0){?> href="javascript:void(0);" onclick='<?php echo substr($_smarty_tpl->tpl_vars['deleteAction']->value->getUrl(),strlen("javascript:"));?>
'<?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['deleteAction']->value->getUrl();?>
' <?php }?> title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" disabled="disabled"><i class="fa fa-trash"></i></button><?php }?><?php if ($_smarty_tpl->tpl_vars['commentAction']->value){?><button type="button" class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo $_smarty_tpl->tpl_vars['commentAction']->value->getLabel();?>
"onclick="Vtiger_List_Js.triggerMassAction('<?php echo $_smarty_tpl->tpl_vars['commentAction']->value->getUrl();?>
')" title="<?php echo vtranslate('LBL_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" disabled="disabled"><i class="fa fa-comment"></i></button><?php }?><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value)>0||count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])>0){?><div class="btn-group listViewMassActions pull-right" role="group"><ul class="" role="menu"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()!='Print'){?><button class="selectFreeRecords <?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel());?>
"href='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl();?>
'><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></button><?php }?><?php } ?></ul></div><?php }?></div></div><div class='col-md-6'><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'&&$_smarty_tpl->tpl_vars['REQUEST_INSTANCE']->value&&$_smarty_tpl->tpl_vars['REQUEST_INSTANCE']->value->isAjax()){?><?php if ($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname']){?><?php $_smarty_tpl->tpl_vars['VIEWID'] = new Smarty_variable($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['VIEWID']->value){?><?php  $_smarty_tpl->tpl_vars['FILTER_TYPES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FILTER_TYPES']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FILTER_TYPES']->key => $_smarty_tpl->tpl_vars['FILTER_TYPES']->value){
$_smarty_tpl->tpl_vars['FILTER_TYPES']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['FILTERS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FILTERS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FILTER_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FILTERS']->key => $_smarty_tpl->tpl_vars['FILTERS']->value){
$_smarty_tpl->tpl_vars['FILTERS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['FILTERS']->value->get('cvid')==$_smarty_tpl->tpl_vars['VIEWID']->value){?><?php $_smarty_tpl->tpl_vars['CVNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FILTERS']->value->get('viewname'), null, 0);?><?php break 1?><?php }?><?php } ?><?php } ?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl(), null, 0);?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultCustomFilter(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value){?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable((((($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl()).("&viewname=")).($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value)).("&app=")).($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['CVNAME']->value!='All'){?><div><?php echo vtranslate('LBL_DISPLAYING_RESULTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <b><?php echo $_smarty_tpl->tpl_vars['CVNAME']->value;?>
</b>. <a style="color:blue" href='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL']->value;?>
'><?php echo vtranslate('LBL_SEARCH_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('All',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> </div><?php }?><?php }?><?php }?><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="selectAllMsgDiv"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount" value=""></span>)</a></center></div><div class="hide messageContainer" style = "height:30px;"><center><a href="#" id="deSelectAllMsgDiv"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div></div><div class="col-md-3"><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div></div></div>
<style>
button.selectFreeRecords.Find.Duplicates {
    display: none;
}

button.selectFreeRecords.Import {
    display: none;
}
button.selectFreeRecords.Export {
    margin-left: -35px;
}
</style><?php }} ?>