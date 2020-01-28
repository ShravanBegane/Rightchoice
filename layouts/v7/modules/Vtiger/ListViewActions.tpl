{*<!--
/*+***********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************/
-->*}

{strip}

    {if $MODULE === 'Calendar'}
    <style>
    ul.calender-list 
    {
        display: flex;
        list-style: none;
        
    }  
    
    ul.calender-list a 
    {
    font-size: 14px;
    margin-left: 21px;
    }
        
    </style>

  
    <ul class="calender-list">
       <li><a class="new-button new-button-green"  data-test="New" href="index.php?module=Calendar&view=Edit&mode=Events&calendarModule=Events" title="New"><span style="text-color:white;" >New</span></a></li>
      <li><a href="index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B"taskstatus"%2C"activitytype"%2C"subject"%2C"parent_id"%2C"date_start"%2C"due_date"%2C"assigned_user_id"%5D&tag="activitytype"%2C"e"%2C"Task%2CTask"%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5B"taskstatus"%2C"activitytype"null"subject"%2C"parent_id"%2C"date_start"%2C"due_date"%2C"assigned_user_id"%5D&tag=" title="All Activities">All Activities</a></li>
     {php}
    include("config.inc.php");
     $conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);
         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                                  } 
            $query="SELECT * FROM `vtiger_activitytype` order by sortorderid ";
            $result =mysqli_query($conn,$query);
               if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
      if($row['activitytype']=='Call'){
        echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-phone' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
  } elseif($row['activitytype']=='Email'){
     echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-envelope-o' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
  } elseif($row['activitytype']=='Meeting'){
     echo "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-users' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
 } elseif($row['activitytype']=='Task'){
     echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-clock-o' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
 }  elseif($row['activitytype']=='Other'){
     echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-mobile' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
 }  else { 
     echo  "<li><a href='index.php?module=Calendar&parent=&page=1&view=List&viewname=19&orderby=&sortorder=&app=MARKETING&search_params=%5B%5B%5B%22subject%22%2C%22e%22%2C%22". $row['activitytype']."%22%5D%5D%5D&tag_params=%5B%5D&nolistcache=0&list_headers=%5Btaskstatus%2Csubject%2Csubject%2Cparent_id%2Cdate_start%2Cdue_date%2Cassigned_user_id%5D&tag=' title='".$row['activitytype']."'><i class='fa fa-tasks' aria-hidden='true' ></i> " . $row['activitytype']. "</a></li>";
 }
}
}
 {/php}
</ul>
    {/if}


    {assign var=LISTVIEW_MASSACTIONS_1 value=array()}
    <div id="listview-actions" class="listview-actions-container">
        {foreach item=LIST_MASSACTION from=$LISTVIEW_MASSACTIONS name=massActions}
            {if $LIST_MASSACTION->getLabel() eq 'LBL_EDIT'}
                {assign var=editAction value=$LIST_MASSACTION}
            {else if $LIST_MASSACTION->getLabel() eq 'LBL_DELETE'}
                {assign var=deleteAction value=$LIST_MASSACTION}
            {else if $LIST_MASSACTION->getLabel() eq 'LBL_ADD_COMMENT'}
                {assign var=commentAction value=$LIST_MASSACTION}
            {else}
                {$a = array_push($LISTVIEW_MASSACTIONS_1, $LIST_MASSACTION)}
                {* $a is added as its print the index of the array, need to find a way around it *}
            {/if}
        {/foreach}
        <div class = "row">
           
            <div class=" col-md-3">
            <div class="btn-group listViewActionsContainer" role="group" aria-label="...">
                {if $editAction}
                    <button type="button" class="btn btn-default" id={$MODULE}_listView_massAction_{$editAction->getLabel()} 
                            {if stripos($editAction->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$editAction->getUrl()|substr:strlen("javascript:")}'{else} href='{$editAction->getUrl()}' {/if} title="{vtranslate('LBL_EDIT', $MODULE)}" disabled="disabled">
                        <i class="fa fa-pencil"></i>
                    </button>
                {/if}
                {if $deleteAction}
                    <button type="button" class="btn btn-default" id={$MODULE}_listView_massAction_{$deleteAction->getLabel()} 
                            {if stripos($deleteAction->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$deleteAction->getUrl()|substr:strlen("javascript:")}'{else} href='{$deleteAction->getUrl()}' {/if} title="{vtranslate('LBL_DELETE', $MODULE)}" disabled="disabled">
                        <i class="fa fa-trash"></i>
                    </button>
                {/if}
                {if $commentAction}
                    <button type="button" class="btn btn-default" id="{$MODULE}_listView_massAction_{$commentAction->getLabel()}" 
                            onclick="Vtiger_List_Js.triggerMassAction('{$commentAction->getUrl()}')" title="{vtranslate('LBL_COMMENT', $MODULE)}" disabled="disabled">
                        <i class="fa fa-comment"></i>
                    </button>
                {/if}

              {if count($LISTVIEW_MASSACTIONS_1) gt 0 or $LISTVIEW_LINKS['LISTVIEW']|@count gt 0}
                    <div class="btn-group listViewMassActions" role="group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                            {vtranslate('LBL_MORE','Vtiger')}&nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            {foreach item=LISTVIEW_MASSACTION from=$LISTVIEW_MASSACTIONS_1 name=advancedMassActions}
                                <li class="hide"><a id="{$MODULE}_listView_massAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($LISTVIEW_MASSACTION->getLabel())}" {if stripos($LISTVIEW_MASSACTION->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$LISTVIEW_MASSACTION->getUrl()|substr:strlen("javascript:")};'{else} href='{$LISTVIEW_MASSACTION->getUrl()}' {/if}>{vtranslate($LISTVIEW_MASSACTION->getLabel(), $MODULE)}</a></li>
                            {/foreach}
                            {if count($LISTVIEW_MASSACTIONS_1) gt 0 and $LISTVIEW_LINKS['LISTVIEW']|@count gt 0}
                                <li class="divider hide"></li>
                            {/if}
							{if $MODULE_MODEL->isStarredEnabled()}
								<li class="hide">
									<a id="{$MODULE}_listView_massAction_LBL_ADD_STAR" onclick="Vtiger_List_Js.triggerAddStar()">
										{vtranslate('LBL_FOLLOW',$MODULE)}
									</a>
								</li>
								<li class="hide">
									<a id="{$MODULE}_listView_massAction_LBL_REMOVE_STAR" onclick="Vtiger_List_Js.triggerRemoveStar()">
										{vtranslate('LBL_UNFOLLOW',$MODULE)}
									</a>
								</li>
							{/if}
                            <li class="hide">
                                <a id="{$MODULE}_listView_massAction_LBL_ADD_TAG" onclick="Vtiger_List_Js.triggerAddTag()">
                                    {vtranslate('LBL_ADD_TAG',$MODULE)}
                                </a>
                            </li>
                            {if $CURRENT_TAG neq ''}
                            <li class="hide">
                                <a id="{$MODULE}_listview_massAction_LBL_REMOVE_TAG" onclick="Vtiger_List_Js.triggerRemoveTag({$CURRENT_TAG})">
                                    {vtranslate('LBL_REMOVE_TAG', $MODULE)}
                                </a>
                            </li>
                            {/if}
                            <li class="divider hide" style="margin:9px 0px;"></li>
                            {assign var=FIND_DUPLICATES_EXITS value=false}
                            {foreach item=LISTVIEW_ADVANCEDACTIONS from=$LISTVIEW_LINKS['LISTVIEW']}
                                {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'Print'}
                                    {assign var=PRINT_TEMPLATE value=$LISTVIEW_ADVANCEDACTIONS}
                                {else}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_FIND_DUPLICATES'}
                                        {assign var=FIND_DUPLICATES_EXISTS value=true}
                                    {/if}
                                {/if}
                            {/foreach}
                            
                            {if $PRINT_TEMPLATE}
                                <li class="hide"><a id="{$MODULE}_listView_advancedAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($PRINT_TEMPLATE->getLabel())}" {if stripos($PRINT_TEMPLATE->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$PRINT_TEMPLATE->getUrl()|substr:strlen("javascript:")};'{else} href='{$PRINT_TEMPLATE->getUrl()}' {/if}>{vtranslate($PRINT_TEMPLATE->getLabel(), $MODULE)}</a></li>
                            {/if}
                            {if $FIND_DUPLICATES_EXISTS}
                                <li class="hide"><a id="{$MODULE}_listView_advancedAction_MERGE_RECORD"  href="javascript:void(0);" onclick='Vtiger_List_Js.triggerMergeRecord()'>{vtranslate('LBL_MERGE_SELECTED_RECORDS', $MODULE)}</a></li>
                            {/if}
                            {foreach item=LISTVIEW_ADVANCEDACTIONS from=$LISTVIEW_LINKS['LISTVIEW']}
                                {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_IMPORT'}
                                {*Remove Import Action*}  
                                {elseif $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'Print'}
                                    {assign var=PRINT_TEMPLATE value=$LISTVIEW_ADVANCEDACTIONS}
                                {else}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() == 'LBL_FIND_DUPLICATES'}
                                        {assign var=FIND_DUPLICATES_EXISTS value=true}
                                    {/if}
                                    {if $LISTVIEW_ADVANCEDACTIONS->getLabel() != 'Print'}
                                        <li class="selectFreeRecords"><a id="{$MODULE}_listView_advancedAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($LISTVIEW_ADVANCEDACTIONS->getLabel())}" {if stripos($LISTVIEW_ADVANCEDACTIONS->getUrl(), 'javascript:')===0} href="javascript:void(0);" onclick='{$LISTVIEW_ADVANCEDACTIONS->getUrl()|substr:strlen("javascript:")};'{else} href='{$LISTVIEW_ADVANCEDACTIONS->getUrl()}' {/if}>{vtranslate($LISTVIEW_ADVANCEDACTIONS->getLabel(), $MODULE)}</a></li>
                                    {/if}  
                                {/if}
                            {/foreach}
                        </ul>
                    </div>
                {/if}
            </div>
            </div>
            <div class='col-md-6'>
                {if $LISTVIEW_ENTRIES_COUNT eq '0' and $REQUEST_INSTANCE and $REQUEST_INSTANCE->isAjax()}
                    {if $smarty.session.lvs.$MODULE.viewname}
                        {assign var=VIEWID value=$smarty.session.lvs.$MODULE.viewname}
                    {/if}
                    {if $VIEWID}
                        {foreach item=FILTER_TYPES from=$CUSTOM_VIEWS}
                            {foreach item=FILTERS from=$FILTER_TYPES}
                                {if $FILTERS->get('cvid') eq $VIEWID}
                                    {assign var=CVNAME value=$FILTERS->get('viewname')}
                                    {break}
                                {/if}
                            {/foreach}
                        {/foreach}
                        {assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getDefaultUrl()}
                        {assign var=DEFAULT_FILTER_ID value=$MODULE_MODEL->getDefaultCustomFilter()}
                        {if $DEFAULT_FILTER_ID}
                            {assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getListViewUrl()|cat:"&viewname="|cat:$DEFAULT_FILTER_ID|cat:"&app="|cat:$SELECTED_MENU_CATEGORY}
                        {/if}
                        {if $CVNAME neq 'All'}
                            <div>{vtranslate('LBL_DISPLAYING_RESULTS',$MODULE)} {vtranslate('LBL_FROM',$MODULE)} <b>{$CVNAME}</b>. <a style="color:blue" href='{$DEFAULT_FILTER_URL}'>{vtranslate('LBL_SEARCH_IN',$MODULE)} {vtranslate('All',$MODULE)} {vtranslate($MODULE, $MODULE)}</a> </div>
                        {/if}
                    {/if}
                {/if}
                <div class="hide messageContainer" style = "height:30px;">
                    <center><a href="#" id="selectAllMsgDiv">{vtranslate('LBL_SELECT_ALL',$MODULE)}&nbsp;{vtranslate($MODULE ,$MODULE)}&nbsp;(<span id="totalRecordsCount" value=""></span>)</a></center>
                </div>
                <div class="hide messageContainer" style = "height:30px;">
                    <center><a href="#" id="deSelectAllMsgDiv">{vtranslate('LBL_DESELECT_ALL_RECORDS',$MODULE)}</a></center>
                </div>            
            </div>
            <div class="col-md-3">
                {assign var=RECORD_COUNT value=$LISTVIEW_ENTRIES_COUNT}
                {include file="Pagination.tpl"|vtemplate_path:$MODULE SHOWPAGEJUMP=true}
            </div>
        </div>	
     </div>
{/strip}
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
</style>