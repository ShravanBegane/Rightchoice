<?php /* Smarty version Smarty-3.1.7, created on 2020-02-26 06:07:24
         compiled from "/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20416061945e560b1c9dd4b9-67941568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a88dba3c3809a2a967dca08e1f732f3793b8c8c' => 
    array (
      0 => '/var/www/html/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewActions.tpl',
      1 => 1582691855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20416061945e560b1c9dd4b9-67941568',
  'function' => 
  array (
  ),
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
    'LISTVIEW_MASSACTION' => 0,
    'MODULE_MODEL' => 0,
    'CURRENT_TAG' => 0,
    'LISTVIEW_ADVANCEDACTIONS' => 0,
    'PRINT_TEMPLATE' => 0,
    'FIND_DUPLICATES_EXISTS' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'REQUEST_INSTANCE' => 0,
    'VIEWID' => 0,
    'CUSTOM_VIEWS' => 0,
    'FILTER_TYPES' => 0,
    'FILTERS' => 0,
    'DEFAULT_FILTER_ID' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'CVNAME' => 0,
    'DEFAULT_FILTER_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5e560b1ca33dd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e560b1ca33dd')) {function content_5e560b1ca33dd($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MODULE']->value==='Calendar'){?><style>ul.calender-list{display: flex;list-style: none;}ul.calender-list a{font-size: 14px;margin-left: 21px;}</style><ul class="calender-list"><li><a class="new-button new-button-green"  data-test="New" href="index.php?module=Calendar&view=Edit&mode=Events&calendarModule=Events" title="New"><span style="text-color:white;" >New</span></a></li><li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B"taskstatus"%2C"activitytype"%2C"subject"%2C"parent_id"%2C"date_start"%2C"due_date"%2C"assigned_user_id"%5D&tag="activitytype"%2C"e"%2C"Task%2CTask"%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B"taskstatus"%2C"activitytype"null"subject"%2C"parent_id"%2C"date_start"%2C"due_date"%2C"assigned_user_id"%5D&tag=" title="All Activities">All Activities</a></li><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
include("config.inc.php");$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}$query="SELECT * FROM `vtiger_activitytype` order by sortorderid ";$result =mysqli_query($conn,$query);if (mysqli_num_rows($result) > 0) {while($row = mysqli_fetch_assoc($result)) {if($row['activitytype']=='Call'){echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-phone' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";} elseif($row['activitytype']=='Email'){echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-envelope-o' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";} elseif($row['activitytype']=='Meeting'){echo "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-users' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";} elseif($row['activitytype']=='Task'){echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-clock-o' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";}  elseif($row['activitytype']=='Other'){echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-mobile' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";}  else {echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-tasks' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";}}}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</ul><?php }?><?php $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1'] = new Smarty_variable(array(), null, 0);?><div id="listview-actions" class="listview-actions-container"><?php  $_smarty_tpl->tpl_vars['LIST_MASSACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LIST_MASSACTION']->_loop = false;
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
" disabled="disabled"><i class="fa fa-comment"></i></button><?php }?><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value)>0||count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])>0){?><div class="btn-group listViewMassActions" role="group"><button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><?php echo vtranslate('LBL_MORE','Vtiger');?>
&nbsp;<span class="caret"></span></button><ul class="dropdown-menu" role="menu"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->_loop = true;
?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel());?>
" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),'javascript:')===0){?> href="javascript:void(0);" onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl();?>
' <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php } ?><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value)>0&&count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])>0){?><li class="divider hide"></li><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()){?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_LBL_ADD_STAR" onclick="Vtiger_List_Js.triggerAddStar()"><?php echo vtranslate('LBL_FOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_LBL_REMOVE_STAR" onclick="Vtiger_List_Js.triggerRemoveStar()"><?php echo vtranslate('LBL_UNFOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_LBL_ADD_TAG" onclick="Vtiger_List_Js.triggerAddTag()"><?php echo vtranslate('LBL_ADD_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['CURRENT_TAG']->value!=''){?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listview_massAction_LBL_REMOVE_TAG" onclick="Vtiger_List_Js.triggerRemoveTag(<?php echo $_smarty_tpl->tpl_vars['CURRENT_TAG']->value;?>
)"><?php echo vtranslate('LBL_REMOVE_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><li class="divider hide" style="margin:9px 0px;"></li><?php $_smarty_tpl->tpl_vars['FIND_DUPLICATES_EXITS'] = new Smarty_variable(false, null, 0);?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()=='Print'){?><?php $_smarty_tpl->tpl_vars['PRINT_TEMPLATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value, null, 0);?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()=='LBL_FIND_DUPLICATES'){?><?php $_smarty_tpl->tpl_vars['FIND_DUPLICATES_EXISTS'] = new Smarty_variable(true, null, 0);?><?php }?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value){?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value->getLabel());?>
" <?php if (stripos($_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value->getUrl(),'javascript:')===0){?> href="javascript:void(0);" onclick='<?php echo substr($_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value->getUrl();?>
' <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PRINT_TEMPLATE']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['FIND_DUPLICATES_EXISTS']->value){?><li class="hide"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_MERGE_RECORD"  href="javascript:void(0);" onclick='Vtiger_List_Js.triggerMergeRecord()'><?php echo vtranslate('LBL_MERGE_SELECTED_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()=='LBL_IMPORT'){?><?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()=='Print'){?><?php $_smarty_tpl->tpl_vars['PRINT_TEMPLATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value, null, 0);?><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()=='LBL_FIND_DUPLICATES'){?><?php $_smarty_tpl->tpl_vars['FIND_DUPLICATES_EXISTS'] = new Smarty_variable(true, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel()!='Print'){?><li class="selectFreeRecords"><a id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel());?>
" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),'javascript:')===0){?> href="javascript:void(0);" onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl();?>
' <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php }?><?php } ?></ul></div><?php }?></div></div><div class='col-md-6'><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'&&$_smarty_tpl->tpl_vars['REQUEST_INSTANCE']->value&&$_smarty_tpl->tpl_vars['REQUEST_INSTANCE']->value->isAjax()){?><?php if ($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname']){?><?php $_smarty_tpl->tpl_vars['VIEWID'] = new Smarty_variable($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['VIEWID']->value){?><?php  $_smarty_tpl->tpl_vars['FILTER_TYPES'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FILTER_TYPES']->_loop = false;
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
Employees_detailView_moreAction_Delete_Employees{
	display:none;
}
</style><?php }} ?>