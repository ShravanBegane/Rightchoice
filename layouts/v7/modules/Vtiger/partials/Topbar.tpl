{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

{strip}
	{include file="modules/Vtiger/Header.tpl"}

	{assign var=APP_IMAGE_MAP value=Vtiger_MenuStructure_Model::getAppIcons()}
	

	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <a href="index.php" class="company-logo navbar-brand">
		<img src="{$COMPANY_LOGO->get('imagepath')}" alt="{$COMPANY_LOGO->get('alt')}"/>
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
		<div class="search-links-container global-search col-md-2 col-lg-2 hidden-sm">
			<div class="search-link hidden-xs">
				<span class="fa fa-search" aria-hidden="true"></span>
				<input class="keyword-input" type="text" placeholder="{vtranslate('LBL_TYPE_SEARCH')}" value="{$GLOBAL_SEARCH_VALUE}">
				<span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span>
			</div>
		</div>
	  
	  <ul class="nav navbar-nav">				
		<li>
			<div class="">
				<div >
					<a href="index.php?module=Home&view=DashBoard" id="menubar_quickCreate" title="RightView" aria-hidden="true"> <i class="fa fa-dashboard fa-2x"></i><span class="icon-menus"> RightView</span></a>
				</div>
			</div>
		</li>
		
		<li>
			<div class="dropdown">
				<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="#" id="menubar_quickCreate"  title="RightCapture" aria-hidden="true"><i class="fa fa-camera fa-2x"></i> <span class="icon-menus">RightCapture</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:160px;">
					<li><a id="menubar_quickCreate_Contacts" class="quickCreateModule" title="Contacts" href="index.php?module=Contacts&view=List&app=MARKETING"><i class="vicon-contacts" ></i> <span class="quick-create-module"> Contacts</span></a></li>
					<li><a id="menubar_quickCreate_Accounts" class="quickCreateModule" title="Business" href="index.php?module=Accounts&view=List&app=MARKETING"><i class="vicon-accounts" ></i> <span class="quick-create-module"> Business</span></a></li>
					<li><a id="menubar_quickCreate_Leads" class="quickCreateModule" title="Leads" href="index.php?module=Leads&view=List&app=MARKETING"><i class="vicon-leads" ></i> <span class="quick-create-module"> Leads</span></a></li>
					<li><a id="menubar_quickCreate_Potentials" class="quickCreateModule" title="Opportunities" href="index.php?module=Potentials&view=List&app=MARKETING"><i class="vicon-potentials" ></i> <span class="quick-create-module"> Opportunities</span></a></li>
				</ul>
			</div>
		</li>
		<li>
			<div class="dropdown">
				<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="#" id="menubar_quickCreate"  title="RightMarket" aria-hidden="true"><i class="fa fa-line-chart fa-2x"></i><span class="icon-menus">RightMarket</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:230px;">
				 	<li><a id="menubar_quickCreate_Potentials" class="quickCreateModule" title="Email Marketing"  href="index.php?module=Emailmarketing&view=List&app=MARKETING" ><i class="fa fa-envelope fa-2x" ></i><span class="quick-create-module"> Email Marketing </span></a></li>
				 </ul>    
			</div>
		</li>

				
		<!-- <li>
			<div class="dropdown">
				<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="#" id="menubar_quickCreate"  title="RightManage" aria-hidden="true"><i class="fa fa-briefcase fa-2x"></i> <span class="icon-menus">RightManage</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:230px;">
				    <li><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Activities" href="index.php?module=Calendar&view=List&viewname=19&app=MARKETING" ><i class="vicon-calendarlist"  title="Activities"></i> <span class="quick-create-module"> Activities </span></a></li>
					<li><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Calendar" href="index.php?module=Calendar&view=Calendar" ><i class="fa fa-calendar fa-2x"  title="Calendar"></i> <span class="quick-create-module"> Calendar </span></a></li>
					<li><a id="menubar_quickCreate_Leads" target="_blank" class="quickCreateModule" data-name="RightAccess"  href="https://my360crm.com/my360access/"><i class="fa fa-external-link-square fa-2x"  title="access"></i> <span class="quick-create-module"> Access <b style="color:red;">(Coming Soon)</b></span></a></li>
					<li><a id="menubar_quickCreate_Potentials" target="_blank" class="quickCreateModule" data-name="RightShift"  href="https://my360crm.com/my360shift"><i class="fa fa-info-circle fa-2x" title="Shift"></i> <span class="quick-create-module"> Shift <b style="color:red;">(Coming Soon)</b></span></a></li>
				   
				</ul>
			</div>
		</li>-->
		
		<!--<li>
			<div class="">
				<div >
					<a href="index.php?module=Calendar&view=List&viewname=19&app=MARKETING" id="menubar_quickCreate" class="qc-button fa fa-dashboard" title="Activities" aria-hidden="true"> <span class="icon-menus">Activities</span></a>
				</div>
			</div>
		</li>-->

		<!-- <li>
			<div class="dropdown">
				<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="index.php?module=Calendar&view=List&viewname=19&app=MARKETING" id="menubar_quickCreate" class="qc-button fa fa-calendar-check-o" title="Activities" aria-hidden="true"> <span class="icon-menus">Activities</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:160px;">
					<li><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts"  href="index.php?module=Potentials&view=List#"><i class="vicon-task" title="Contacts"></i> <span class="quick-create-module">Tasks</span></a></li>
					<li><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts"  href="index.php?module=Calendar&view=List&viewname=19&app=MARKETING"><i class="vicon-calendar" title="Contacts"></i> <span class="quick-create-module">Activities</span></a></li>
				
				</ul>
				
			</div>
		</li> -->
	<!--	<li>
			<div class="dropdown">
				<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="#" id="menubar_quickCreate" class="qc-button fa fa-users" title="Contacts" aria-hidden="true"> <span class="icon-menus">Contacts</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:160px;">
					<li><a id="menubar_quickCreate_Contacts" class="quickCreateModule" data-name="Contacts"  href="index.php?module=Contacts&view=List&app=MARKETING"><i class="vicon-contacts" title="Contacts"></i> <span class="quick-create-module">People</span></a></li>
					<li><a id="menubar_quickCreate_Accounts" class="quickCreateModule" data-name="Accounts"  href="index.php?module=Accounts&view=List&app=MARKETING"><i class="vicon-accounts" title="Organizations"></i> <span class="quick-create-module">Organization</span></a></li>
				</ul>
				
			</div>
		</li> -->
		
	
		
		
		
		
		<!--<li>
			<div class="dropdown">
					<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<a href="#" id="menubar_quickCreate"  title="RightMarket" aria-hidden="true"><i class="fa fa-line-chart fa-2x"></i> <span class="icon-menus">RightMarket</span></a>
				</div>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:230px;">
				 <li><a id="menubar_quickCreate_Potentials" target="_blank" class="quickCreateModule" title="Email Marketing"  href="https://my360crm.com/my360market" ><i class="fa fa-envelope fa-2x" ></i><span class="quick-create-module"> Email Marketing </span></a></li>
				     <li><a id="menubar_quickCreate_Leads" class="quickCreateModule" title="SMS Marketing" href="https://my360crm.com/my360market" ><i class="fa fa-comment fa-2x" ></i><span class="quick-create-module"> SMS Marketing </span></a></li>
				     <li><a id="menubar_quickCreate_Leads" class="quickCreateModule" title="Social Media Management" href="https://my360crm.com/my360market" ><i class="fa fa-pinterest fa-2x" ></i><span class="quick-create-module"> Social Media Management </span></a></li>
				     <li><a id="menubar_quickCreate_Leads" target="_blank" class="quickCreateModule" title="Local Listings"  href="https://my360crm.com/my360market" ><i class="fa fa-list-ul fa-2x"></i><span class="quick-create-module"> Local Listings </span></a></li>
			         <li><a id="menubar_quickCreate_Leads" target="_blank" class="quickCreateModule" title="Event Management"  href="https://my360crm.com/my360market" ><i class="fa fa-tasks fa-2x" ></i><span class="quick-create-module"> Event Management </span></a></li>
				   	<li><a id="menubar_quickCreate_Potentials" target="_blank" class="quickCreateModule" title="Reputation Management"  href="https://my360crm.com/my360market" ><i class="fa fa-check fa-2x" ></i><span class="quick-create-module"> Reputation Management </span></a></li></div>
				</li>-->
			<!--<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-2696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2696"><a title="SMS Marketing" href="https://my360crm.com/my360market/">SMS Marketing</a></li>
	<li id="menu-item-2697" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2697"><a title="Social Media Management" href="https://my360crm.com/my360market/">Social Media Management</a></li>
	<li id="menu-item-2698" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2698"><a title="Local Listings" href="https://my360crm.com/my360market/">Local Listings</a></li>
	<li id="menu-item-2699" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2699"><a title="Email Marketing" href="https://my360crm.com/my360market/">Email Marketing</a></li>
	<li id="menu-item-2700" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2700"><a title="Event Management" href="https://my360crm.com/my360market/">Event Management</a></li>
	<li id="menu-item-2701" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2701"><a title="Reputation Management" href="https://my360crm.com/my360market/">Reputation Management</a></li>
</ul>-->
	
	<!--	<li>
			<div class="">
				<div >
					<a href="#" id="menubar_quickCreate"  title="RightTrack" aria-hidden="true"><i class="fa fa-map-marker fa-2x"></i> <span class="icon-menus">RightTrack</span></a>
				</div>
			</div>
		</li>-->
      </ul>
     <ul class="nav navbar-nav navbar-right">
		<li>
						<div class="dropdown">
						<!--	<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">-->
							
								<a href="index.php?module=MailManager&view=List" id="menubar_quickCreate" >
								<span class="faicons fa fa-envelope" title="Mail Manager"></span></a>
						<!--	</div>-->
						<!--	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:160px;">
								<li><a id="menubar_quickCreate_Leads" class="quickCreateModule" data-name="Mail"  href="index.php?module=MailManager&view=List"><i class="vicon-mailmanager" title="Mail"></i> <span class="quick-create-module">Mail Settings</span></a></li>
								<li><a id="menubar_quickCreate_Potentials" class="quickCreateModule" data-name="Email Templates"  href="index.php?module=EmailTemplates&view=List&app=TOOLS"><i class="vicon-emailtemplates" title="Email Templates"></i> <span class="quick-create-module">Email Templates</span></a></li>
							</ul>-->
						</div>
					</li>	
<!--<li>
<div class="dropdown">
<a href="index.php?module=Calendar&view=List" id="menubar_quickCreate" >
<span class="vicon-calendarlist" title="Activities"></span></a>
</div>
</li>-->
<li>
<div class="dropdown">
<a href="index.php?module=Calendar&view=Calendar" id="menubar_quickCreate" >
<span class="fa fa-calendar fa-2x" title="Calendar"></span></a>
</div>
</li>
 <li>
                                              <div class="dropdown">				
                                              <a href="index.php?module=HelpDesk&view=List&app=SUPPORT" id="menubar_quickCreate">			
                                              <span class="vicon-helpdesk" title="Tickets"></span>			
                                              </a>
                                              </div>			
                                        </li>
 <li>
                                              <div class="dropdown">				
                                              <a href="index.php?module=Documents&view=List&app=MARKETING" id="menubar_quickCreate">			
                                              <span class="vicon-documents" title="Documents"></span>			
                                              </a>
                                              </div>			
                                        </li>
	
			 <li>
                                              <div class="dropdown">				
                                              <a href="index.php?module=Project&view=List&app=MARKETING" id="menubar_quickCreate">			
                                              <span class="vicon-project" title="Project"></span>			
                                              </a>
                                              </div>			
                                        </li>	

					
					
					<li>
						<div class="dropdown">
							<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<a href="#" id="menubar_quickCreate" class="qc-button" title="{vtranslate('LBL_QUICK_CREATE',$MODULE)}" aria-hidden="true">
									<span class="faicons fa fa-plus-circle"></span></a>
							</div>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
								<li class="title" style="padding: 5px 0 0 15px;">
									<strong>{vtranslate('LBL_QUICK_CREATE',$MODULE)}</strong>
								</li>
								<hr/>
								<li id="quickCreateModules" style="padding: 0 5px;">
										<div class="col-lg-12" style="padding-bottom:15px;">
											{foreach key=moduleName item=moduleModel from=$QUICK_CREATE_MODULES}
												{if $moduleModel->isPermitted('CreateView') || $moduleModel->isPermitted('EditView')}
													{assign var='quickCreateModule' value=$moduleModel->isQuickCreateSupported()}
													{assign var='singularLabel' value=$moduleModel->getSingularLabelKey()}
													{assign var=hideDiv value={!$moduleModel->isPermitted('CreateView') && $moduleModel->isPermitted('EditView')}}
													{if $quickCreateModule == '1'}
														{if $count % 3 == 0}
															<div class="row">
															{/if}
															{* Adding two links,Event and Task if module is Calendar *}
															{if $singularLabel == 'SINGLE_Calendar'}
																{assign var='singularLabel' value='LBL_TASK'}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
																	<a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"
																	   data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)">{$moduleModel->getModuleIcon('Event')}<span class="quick-create-module">{vtranslate('LBL_EVENT',$moduleName)}</span></a>
																</div> 
															
																<!--<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}"
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">{$moduleModel->getModuleIcon('Event')}<span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span></a>
																</div>-->																<!-- changed !$hideDiv to $hideDiv below -->
																{if $hideDiv}
																	{assign var='count' value=$count+1}
																{/if}
															{else if $singularLabel == 'SINGLE_Documents'}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if} dropdown">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModuleSubmenu dropdown-toggle" data-name="{$moduleModel->getName()}" data-toggle="dropdown" 
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
																		{$moduleModel->getModuleIcon()}
																		<span class="quick-create-module">
																			{vtranslate($singularLabel,$moduleName)}
																			<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i>
																		</span>
																	</a>
																	<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_{$moduleModel->getName()}">
																		<li class="dropdown-header"><i class="fa fa-upload"></i> {vtranslate('LBL_FILE_UPLOAD', $moduleName)}</li>
																		<li id="VtigerAction">
																			<a href="javascript:Documents_Index_Js.uploadTo('Vtiger')">
																				<img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">
																				{vtranslate('LBL_TO_SERVICE', $moduleName, {vtranslate('LBL_VTIGER', $moduleName)})}
																			</a>
																		</li>
																		<li class="dropdown-header"><i class="fa fa-link"></i> {vtranslate('LBL_LINK_EXTERNAL_DOCUMENT', $moduleName)}</li>
																		<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; {vtranslate('LBL_FROM_SERVICE', $moduleName, {vtranslate('LBL_FILE_URL', $moduleName)})}</a></li>
																		<li role="separator" class="divider"></li>
																		<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> {vtranslate('LBL_CREATE_NEW', $moduleName, {vtranslate('SINGLE_Documents', $moduleName)})}</a></li>
																	</ul>
																</div>
															{else}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4{/if}">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}"
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
																		{$moduleModel->getModuleIcon()}
																		<span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span>
																	</a>
																</div>
															{/if}
															{if $count % 3 == 2}
															</div>
																<br> 
															{/if}
														{if !$hideDiv}
															{assign var='count' value=$count+1}
														{/if}
													{/if}
												{/if}
											{/foreach}
<!--<div class="col-lg-4"><a id="menubar_quickCreate_Quotes" class="quickCreateModule" data-name="Quotes" href="index.php?module=Quotes&view=List&app=SALES"><i class="vicon-quotes" title="Quotes"></i><span class="quick-create-module">Quotes</span></a></div>
										</div>-->

<div class="row">
<!--<div class="col-lg-4" style="margin-top: 15px;"><a id="menubar_quickCreate_Invoice" class="quickCreateModule" data-name="Invoice" href="index.php?module=Invoice&view=List&app=INVENTORY"><i class="vicon-invoice" title="Invoice"></i><span class="quick-create-module">Invoice</span></a></div>-->
<!--<div class="col-lg-4" style="margin-top: 15px;"><a id="menubar_quickCreate_SalesOrder" class="quickCreateModule" data-name="Sales Order" href="index.php?module=SalesOrder&view=List&app=INVENTORY"><i class="vicon-salesorder" title="SalesOrder"></i><span class="quick-create-module">SalesOrder</span></a></div>-->
<!--<div class="col-lg-4" style="margin-top: 15px;"><a id="menubar_quickCreate_PurchaseOrder" class="quickCreateModule" data-name="PurchaseOrder" href="index.php?module=PurchaseOrder&view=List&app=INVENTORY"><i class="vicon-purchaseorder" title="PurchaseOrder"></i><span class="quick-create-module">PurchaseOrder</span></a></div>-->
</div>

									</li>
							</ul>
							
						</div>
					</li>
					{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
					{assign var=CALENDAR_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Calendar')}
					{if $USER_PRIVILEGES_MODEL->hasModulePermission($CALENDAR_MODULE_MODEL->getId())}
					<!--	<li><div><a href="index.php?module=Calendar&view={$CALENDAR_MODULE_MODEL->getDefaultViewName()}" class="fa fa-calendar" title="{vtranslate('Calendar','Calendar')}" aria-hidden="true"></a></div></li>-->
					{/if}
					{assign var=REPORTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Reports')}
					{if $USER_PRIVILEGES_MODEL->hasModulePermission($REPORTS_MODULE_MODEL->getId())}
					<!--	<li><div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="{vtranslate('Reports','Reports')}" aria-hidden="true"></a></div></li>-->
					{/if}
				<!--{if $USER_PRIVILEGES_MODEL->hasModulePermission($CALENDAR_MODULE_MODEL->getId())}
						<li><div><a href="#" class="taskManagement vicon vicon-task" title="{vtranslate('Tasks','Vtiger')}" aria-hidden="true"></a></div></li>
					{/if} -->
					<li class="dropdown">
						<div>
							<a href="#" class="userName dropdown-toggle" data-toggle="dropdown" role="button">
								<span class="faicons fa fa-user" aria-hidden="true" title="{$USER_MODEL->get('first_name')} {$USER_MODEL->get('last_name')}
									  ({$USER_MODEL->get('user_name')})"></span>
								<span class="link-text-xs-only hidden-lg hidden-md hidden-sm">{$USER_MODEL->getName()}</span>
							</a>
							<div class="dropdown-menu logout-content" role="menu">
								<div class="row">
									<div class="col-lg-4 col-sm-4">
										<div class="profile-img-container">
											{assign var=IMAGE_DETAILS value=$USER_MODEL->getImageDetails()}
											{if $IMAGE_DETAILS neq '' && $IMAGE_DETAILS[0] neq '' && $IMAGE_DETAILS[0].path eq ''}
												<i class='vicon-vtigeruser' style="font-size:90px"></i>
											{else}
												{foreach item=IMAGE_INFO from=$IMAGE_DETAILS}
													{if !empty($IMAGE_INFO.path) && !empty({$IMAGE_INFO.orgname})}
														<img src="{$IMAGE_INFO.path}_{$IMAGE_INFO.orgname}" width="100px" height="100px">
													{/if}
												{/foreach}
											{/if}
										</div>
									</div>
									<div class="col-lg-8 col-sm-8">
										<div class="profile-container">
											<h4>{$USER_MODEL->get('first_name')} {$USER_MODEL->get('last_name')}</h4>
											<h5 class="textOverflowEllipsis" title='{$USER_MODEL->get('user_name')}'>{$USER_MODEL->get('user_name')}</h5>
											<p>{$USER_MODEL->getUserRoleName()}</p>
										</div>
									</div>
								</div>
								<div class="logout-footer clearfix">
									<hr style="margin: 10px 0 !important">
									<div class="">
									
										<ul class="profile-settings">
											<!--<li id="quickCreateModules">
												<span class="fa fa-cogs"></span>
												<a id="menubar_item_right_LBL_MY_PREFERENCES" href="{$USER_MODEL->getPreferenceDetailViewUrl()}"> {vtranslate('LBL_MY_PREFERENCES')}</a>
											</li>-->
											<li id="quickCreateModules">
												<span class="fa fa-life-ring"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Support&view=List&app=Support"> Support</a>
											</li>
										<!--	<li id="quickCreateModules">
												<span class="fa fa-wrench"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="#"> Tools</a>
											</li>-->
											<li id="quickCreateModules">
												<span class="fa fa-shopping-cart"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="#"> Upgrade</a>
											</li>
											<li id="quickCreateModules">
												<span class="fa fa-cog"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="{$USER_MODEL->getPreferenceDetailViewUrl()}"> Settings</a>
											</li>

<li id="quickCreateModules">
												<span class="fa fa-trash"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=RecycleBin&view=List&app=TOOLS"> Recycle Bin</a>
											</li>
											
											<li id="quickCreateModules">
												<span class="fa fa-power-off"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout"> {vtranslate('LBL_SIGN_OUT')}</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
      </ul>
    </div>
  </div>
</nav>
	
	
	
{/strip}