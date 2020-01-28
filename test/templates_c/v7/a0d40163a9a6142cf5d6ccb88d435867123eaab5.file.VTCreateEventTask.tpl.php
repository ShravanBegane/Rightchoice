<?php /* Smarty version Smarty-3.1.7, created on 2019-03-22 04:24:50
         compiled from "/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateEventTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16885447105c946392997720-51974678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d40163a9a6142cf5d6ccb88d435867123eaab5' => 
    array (
      0 => '/home/ubuntu/project/internal/includes/runtime/../../layouts/v7/modules/Settings/Workflows/Tasks/VTCreateEventTask.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16885447105c946392997720-51974678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'TASK_TYPE_MODEL' => 0,
    'STATUS_PICKLIST_VALUES' => 0,
    'STATUS_PICKLIST_KEY' => 0,
    'STATUS_PICKLIST_VALUE' => 0,
    'EVENTTYPE_PICKLIST_VALUES' => 0,
    'EVENTTYPE_PICKLIST_KEY' => 0,
    'EVENTTYPE_PICKLIST_VALUE' => 0,
    'ASSIGNED_TO' => 0,
    'LABEL' => 0,
    'ASSIGNED_USERS_LIST' => 0,
    'ASSIGNED_USER_KEY' => 0,
    'ASSIGNED_USER' => 0,
    'timeFormat' => 0,
    'START_TIME' => 0,
    'DATETIME_FIELDS' => 0,
    'DATETIME_FIELD' => 0,
    'END_TIME' => 0,
    'FREQUENCY' => 0,
    'dateFormat' => 0,
    'REPEAT_DATE' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'FIELD_MODELS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'SHOWN_FIELDS_LIST' => 0,
    'MANDATORY_FIELD_MODELS' => 0,
    'MANDATORY_FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c946392a8ac1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c946392a8ac1')) {function content_5c946392a8ac1($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST'] = new Smarty_variable(array(), null, 0);?><div class="row" style="margin-bottom: 70px;"><div class="col-sm-9 col-xs-9"><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_EVENT_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-sm-9 col-xs-9"><input data-rule-required="true" class="inputElement" name="eventName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->eventName;?>
" /><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['subject'] = 'subject';?></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-9 col-xs-9"><textarea class="inputElement" style="height: inherit;" name="description"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->description;?>
</textarea><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['description'] = 'description';?></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><?php $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('eventstatus')->getPickListValues(), null, 0);?><select name="status" class="select2"><?php  $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['STATUS_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->status){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['STATUS_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['eventstatus'] = 'eventstatus';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><?php $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_TYPE_MODEL']->value->getTaskBaseModule()->getField('activitytype')->getPickListValues(), null, 0);?><select name="eventType" class="select2"><?php  $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->eventType){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['EVENTTYPE_PICKLIST_VALUE']->value;?>
</option><?php } ?></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['activitytype'] = 'activitytype';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_ASSIGNED_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-5 col-xs-5"><select name="assigned_user_id" class="select2"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_TO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['ASSIGNED_USER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = false;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ASSIGNED_USERS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key => $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value){
$_smarty_tpl->tpl_vars['ASSIGNED_USER']->_loop = true;
 $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value = $_smarty_tpl->tpl_vars['ASSIGNED_USER']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ASSIGNED_USER_KEY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id){?> selected="" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER']->value;?>
</option><?php } ?></optgroup><?php } ?><optgroup label="<?php echo vtranslate('LBL_SPECIAL_OPTIONS');?>
"><option value="copyParentOwner" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->assigned_user_id=='copyParentOwner'){?> selected="" <?php }?>><?php echo vtranslate('LBL_PARENT_OWNER');?>
</option></optgroup></select></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['assigned_user_id'] = 'assigned_user_id';?></div><div class="row form-group"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startTime!=''){?><?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startTime, null, 0);?><?php }?><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_START_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-3 col-xs-3" ><div class="input-group time"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time!=''){?><?php $_smarty_tpl->tpl_vars['TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time, null, 0);?><?php }?><input type="text" class="timepicker-default inputElement" data-format="<?php echo $_smarty_tpl->tpl_vars['timeFormat']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['START_TIME']->value;?>
" name="startTime" /><span  class="input-group-addon"><i  class="fa fa-clock-o"></i></span></div></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_START_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2 col-xs-2"><div class="row"><div class="col-sm-8 col-xs-8"><input class="inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDays;?>
" name="startDays"data-rule-WholeNumber="true">&nbsp;</div><span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><span class="col-sm-2 col-xs-2"><select class="select2" name="startDirection" style="width: 100%"><option  <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDirection=='after'){?>selected<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDirection=='before'){?>selected<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></span><span class="col-sm-6 col-xs-6"><select class="select2" name="startDatefield"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->startDatefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->getModuleName());?>
</option><?php } ?></select></span><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['date_start'] = 'date_start';?></div><div class="row form-group"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endTime!=''){?><?php $_smarty_tpl->tpl_vars['END_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endTime, null, 0);?><?php }?><span class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_END_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="col-sm-3 col-xs-3" ><div class="input-group time"><?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time!=''){?><?php $_smarty_tpl->tpl_vars['TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->time, null, 0);?><?php }?><input type="text" class="timepicker-default inputElement" value="<?php echo $_smarty_tpl->tpl_vars['END_TIME']->value;?>
" name="endTime" /><span  class="input-group-addon"><i  class="fa fa-clock-o"></i></span></div></div></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_END_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2 col-xs-2"><div class="row"><div class="col-sm-8 col-xs-8"><input class="inputElement" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDays;?>
" name="endDays"data-rule-WholeNumber="true" >&nbsp;</div><span class="alignMiddle"><?php echo vtranslate('LBL_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="col-sm-2 col-xs-2"><select class="select2" name="endDirection" style="width: 100%;"><option  <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDirection=='after'){?>selected<?php }?> value="after"><?php echo vtranslate('LBL_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDirection=='before'){?>selected<?php }?> value="before"><?php echo vtranslate('LBL_BEFORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><span class="col-sm-6 col-xs-6"><select class="select2" name="endDatefield"><?php  $_smarty_tpl->tpl_vars['DATETIME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATETIME_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DATETIME_FIELD']->key => $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value){
$_smarty_tpl->tpl_vars['DATETIME_FIELD']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->endDatefield==$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name')){?>selected<?php }?>  value="<?php echo $_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['DATETIME_FIELD']->value->getModuleName());?>
</option><?php } ?></select></span><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['due_date'] = 'due_date';?></div><div class="row form-group"><div class="col-sm-2 col-xs-2"><?php echo vtranslate('LBL_ENABLE_REPEAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-6 col-xs-6"><input type="checkbox" name="recurringcheck" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringcheck=='on'){?>checked<?php }?> /></div><?php $_smarty_tpl->createLocalArrayVariable('SHOWN_FIELDS_LIST', null, 0);
$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value['recurringtype'] = 'recurringtype';?></div><div class="row form-group"><span class="col-sm-2 col-xs-2">&nbsp;</span><div class="col-sm-10 col-xs-10"><div><?php $_smarty_tpl->tpl_vars['QUALIFIED_MODULE'] = new Smarty_variable('Events', null, 0);?><div class="<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringcheck=='on'){?>show<?php }else{ ?>hide<?php }?>" id="repeatUI"><div class="row form-group"><div class="col-sm-2 col-xs-2"><span class="alignMiddle" style="line-height: 30px;"><?php echo vtranslate('LBL_REPEATEVENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-2 col-xs-2"><select class="select2" name="repeat_frequency" style="width: 100%;"><?php $_smarty_tpl->tpl_vars['FREQUENCY'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['FREQUENCY']->step = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->total = (int)ceil(($_smarty_tpl->tpl_vars['FREQUENCY']->step > 0 ? 14+1 - (1) : 1-(14)+1)/abs($_smarty_tpl->tpl_vars['FREQUENCY']->step));
if ($_smarty_tpl->tpl_vars['FREQUENCY']->total > 0){
for ($_smarty_tpl->tpl_vars['FREQUENCY']->value = 1, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration = 1;$_smarty_tpl->tpl_vars['FREQUENCY']->iteration <= $_smarty_tpl->tpl_vars['FREQUENCY']->total;$_smarty_tpl->tpl_vars['FREQUENCY']->value += $_smarty_tpl->tpl_vars['FREQUENCY']->step, $_smarty_tpl->tpl_vars['FREQUENCY']->iteration++){
$_smarty_tpl->tpl_vars['FREQUENCY']->first = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration == 1;$_smarty_tpl->tpl_vars['FREQUENCY']->last = $_smarty_tpl->tpl_vars['FREQUENCY']->iteration == $_smarty_tpl->tpl_vars['FREQUENCY']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FREQUENCY']->value==$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeat_frequency){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['FREQUENCY']->value;?>
</option><?php }} ?></select></div><div class="col-sm-2 col-xs-2"><select class="select2" name="recurringtype" id="recurringType" style="width: 100%;"><option value="Daily" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Daily'){?> selected <?php }?>><?php echo vtranslate('LBL_DAYS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Weekly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Weekly'){?> selected <?php }?>><?php echo vtranslate('LBL_WEEKS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Monthly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Monthly'){?> selected <?php }?>><?php echo vtranslate('LBL_MONTHS_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Yearly" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Yearly'){?> selected <?php }?>><?php echo vtranslate('LBL_YEAR_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="col-sm-1 col-xs-1"><span class="alignMiddle" style="line-height: 30px;"><?php echo vtranslate('LBL_UNTIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-4 col-xs-4"><span class="input-group date"><input type="text" id="calendar_repeat_limit_date" class="dateField inputElement" name="calendar_repeat_limit_date" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['REPEAT_DATE']->value;?>
" data-rule-date="true"/><span class="input-group-addon"><i class="fa fa fa-calendar"></i></span></span></div></div><div class="row form-group <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Weekly'){?>show<?php }else{ ?>hide<?php }?>" id="repeatWeekUI"><div class="col-sm-1 col-xs-1"><input name="sun_flag" value="sunday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sun_flag=="sunday"){?>checked<?php }?> type="checkbox"/><?php echo vtranslate('LBL_SM_SUN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="mon_flag" value="monday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->mon_flag=="monday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_MON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="tue_flag" value="tuesday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->tue_flag=="tuesday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_TUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="wed_flag" value="wednesday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->wed_flag=="wednesday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_WED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="thu_flag" value="thursday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->thu_flag=="thursday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_THU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="fri_flag" value="friday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->fri_flag=="friday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_FRI',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-1 col-xs-1"><input name="sat_flag" value="saturday" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sat_flag=="saturday"){?>checked<?php }?> type="checkbox"><?php echo vtranslate('LBL_SM_SAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="<?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recurringtype=='Monthly'){?>show<?php }else{ ?>hide<?php }?>" id="repeatMonthUI"><div class="row form-group"><div class="col-sm-1 col-xs-1"><input type="radio" id="repeatDate" name="repeatMonth" checked value="date" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth=='date'){?> checked <?php }?>/></div><div class="col-sm-1 col-xs-1"><span class="alignMiddle"><?php echo vtranslate('LBL_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-2 col-xs-2"><input type="text" id="repeatMonthDate" class="inputElement" name="repeatMonth_date" data-rule-RepeatMonthDate="true" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_date;?>
"/></div><div class="col-sm-6 col-xs-6 alignMiddle"><?php echo vtranslate('LBL_DAY_OF_THE_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="clearfix"></div><div class="row form-group" id="repeatMonthDayUI"><div class="col-sm-1 col-xs-1"><input type="radio" id="repeatDay" name="repeatMonth" value="day" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth=='day'){?> checked <?php }?>/></div><div class="col-sm-1 col-xs-1"><span class="alignMiddle"><?php echo vtranslate('LBL_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-2 col-xs-2"><select id="repeatMonthDayType" class="select2" name="repeatMonth_daytype"><option value="first" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_daytype=='first'){?> selected <?php }?>><?php echo vtranslate('LBL_FIRST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="last" <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_daytype=='last'){?> selected <?php }?>><?php echo vtranslate('LBL_LAST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="col-sm-2 col-xs-2"><select id="repeatMonthDay" class="select2" name="repeatMonth_day"><option value=1 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==1){?> selected <?php }?>><?php echo vtranslate('LBL_DAY1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=2 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==2){?> selected <?php }?>><?php echo vtranslate('LBL_DAY2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=3 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==3){?> selected <?php }?>><?php echo vtranslate('LBL_DAY3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=4 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==4){?> selected <?php }?>><?php echo vtranslate('LBL_DAY4',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=5 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==5){?> selected <?php }?>><?php echo vtranslate('LBL_DAY5',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value=6 <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->repeatMonth_day==6){?> selected <?php }?>><?php echo vtranslate('LBL_DAY6',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div></div></div></div></div></div><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->eventName)){?><?php $_smarty_tpl->tpl_vars['FIELD_MODELS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php if (!in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value)&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayType()!='3'&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()||!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}))&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()!='reference'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()!='multireference'){?><?php $_smarty_tpl->tpl_vars["test"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}), null, 0);?><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?><span class="redColor">*</span><?php }?></span><span class="span6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>Users_Record_Model::getCurrentUserModel()), 0);?>
</span></div><?php }?><?php } ?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getMandatoryFieldModels(), null, 0);?><?php  $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->_loop = true;
?><?php if (!in_array($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['SHOWN_FIELDS_LIST']->value)&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getDisplayType()!='3'&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getFieldDataType()!='reference'&&$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getFieldDataType()!='multireference'){?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars["test"] = new Smarty_variable($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->{$_smarty_tpl->tpl_vars['FIELD_NAME']->value}), null, 0);?><div class="row-fluid padding-bottom1per"><span class="span2"><?php echo vtranslate($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></span><span class="span6"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value,'USER_MODEL'=>Users_Record_Model::getCurrentUserModel()), 0);?>
</span></div><?php }?><?php } ?><?php }?></div></div>
<?php }} ?>