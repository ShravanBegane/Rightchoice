<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H5';

$current_user_parent_role_seq='H1::H2::H4::H5';

$current_user_profiles=array(2,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'31'=>0,'32'=>0,'33'=>0,'34'=>0,'35'=>0,'36'=>0,'37'=>0,'38'=>0,'39'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>0,'49'=>0,'28'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),4=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,10=>0,),6=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,10=>0,),7=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>0,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,6=>1,),9=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),13=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>1,6=>1,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),15=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),18=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),19=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>1,),20=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>0,2=>0,3=>0,4=>0,7=>0,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),30=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),34=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,11=>1,12=>1,14=>0,15=>0,),35=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),42=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),44=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),46=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>1,),47=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),48=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),);

$current_user_groups=array(2,);

$subordinate_roles=array();

$parent_roles=array('H1','H2','H4',);

$subordinate_roles_users=array();

$user_info=array('user_name'=>'kieronmills','is_admin'=>'off','user_password'=>'$1$ki000000$h960py8zmNVdGKCQwy7th0','confirm_password'=>'$1$ki000000$h960py8zmNVdGKCQwy7th0','first_name'=>'Kieron','last_name'=>'Mills','roleid'=>'H5','email1'=>'kieron@my360crm.com','status'=>'Inactive','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'09:00','is_owner'=>'','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'dd-mm-yyyy','signature'=>'&lt;div&gt;&lt;/div&gt;

&lt;div&gt;&lt;/div&gt;

&lt;div&gt;
&lt;div style=&quot;font-family:Helvetica;font-size:12px;&quot;&gt;
&lt;div&gt;
&lt;div&gt;
&lt;div&gt;
&lt;div&gt;
&lt;div class=&quot;ApplePlainTextBody&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;Regards Kieron&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;
&nbsp;&lt;/div&gt;

&lt;div class=&quot;ApplePlainTextBody&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;ApplePlainTextBody&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;ApplePlainTextBody&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;background-color:rgb(255,255,255);margin:0px;padding:0px;line-height:14px;font-family:Helvetica, Arial, sans-serif;&quot;&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E3GRHM&quot; style=&quot;background-color:transparent;color:rgb(13,71,161);&quot;&gt;&lt;img alt=&quot;My360CRM&quot; border=&quot;0&quot; height=&quot;80&quot; src=&quot;https://htmlsigs.s3.amazonaws.com/logos/files/001/075/042/landscape/360-LOGOS-1.png&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;118&quot; /&gt;&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;

&lt;div style=&quot;margin:0px;font-family:Lato, Arial, &#039;San-serif&#039;;font-size:14px;background-color:rgb(255,255,255);padding:0px;line-height:10px;width:508px;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; height=&quot;10&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;width:508px;height:5px;&quot; width=&quot;508&quot; /&gt;&lt;/span&gt;&lt;/div&gt;
&lt;br /&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;background-color:rgb(255,255,255);margin:0px;padding:0px;font-family:Helvetica, Arial, sans-serif;line-height:12px;color:rgb(33,33,33);&quot;&gt;&lt;span style=&quot;font-weight:bold;&quot;&gt;Kieron Mills&lt;/span&gt;&nbsp;/ Sales Manager&lt;br /&gt;&lt;a href=&quot;mailto:jason@my360crm.com&quot; style=&quot;background-color:transparent;color:rgb(71,124,204);&quot;&gt;kieron@my360crm.com&lt;/a&gt;&nbsp;/&nbsp;0410220293&lt;/span&gt;&lt;/span&gt;

&lt;div style=&quot;margin:0px;font-family:Lato, Arial, &#039;San-serif&#039;;font-size:14px;background-color:rgb(255,255,255);padding:0px;line-height:10px;width:508px;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; height=&quot;10&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;width:508px;height:5px;&quot; width=&quot;508&quot; /&gt;&lt;/span&gt;&lt;/div&gt;
&lt;span style=&quot;font-size:14px;&quot;&gt; &lt;span style=&quot;background-color:rgb(255,255,255);margin:0px;padding:0px;font-family:Helvetica, Arial, sans-serif;line-height:12px;&quot;&gt;&lt;span style=&quot;font-weight:bold;color:rgb(33,33,33);&quot;&gt;My360CRM&lt;/span&gt;&nbsp;&lt;br /&gt;&lt;span style=&quot;color:rgb(33,33,33);&quot;&gt;1300360276&lt;/span&gt;&nbsp;&lt;br /&gt;&lt;span style=&quot;color:rgb(33,33,33);&quot;&gt;&lt;a href=&quot;http://my360crm.com/&quot; style=&quot;background-color:transparent;color:rgb(71,124,204);&quot;&gt;my360crm.com&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;

&lt;div style=&quot;margin:0px;padding:0px;line-height:10px;width:508px;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;background-color:rgb(255,255,255);margin:0px;padding:0px;font-family:Helvetica, Arial, sans-serif;line-height:12px;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; height=&quot;10&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;width:508px;height:5px;&quot; width=&quot;508&quot; /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;span style=&quot;font-size:14px;&quot;&gt; &lt;span style=&quot;background-color:rgb(255,255,255);margin:0px;padding:0px;line-height:0px;font-family:Helvetica, Arial, sans-serif;&quot;&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E5S59J&quot; style=&quot;background-color:transparent;color:rgb(36,169,57);&quot;&gt;&lt;img alt=&quot;Twitter&quot; height=&quot;16&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/round/twitter.png&quot; style=&quot;border:none;vertical-align:middle;margin-bottom:2px;&quot; width=&quot;16&quot; /&gt;&lt;/a&gt;&nbsp;&lt;span style=&quot;white-space:nowrap;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;2&quot; /&gt;&nbsp;&lt;/span&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E93DQB&quot; style=&quot;background-color:transparent;color:rgb(36,169,57);&quot;&gt;&lt;img alt=&quot;Facebook&quot; height=&quot;16&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/round/facebook.png&quot; style=&quot;border:none;vertical-align:middle;margin-bottom:2px;&quot; width=&quot;16&quot; /&gt;&lt;/a&gt;&nbsp;&lt;span style=&quot;white-space:nowrap;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;2&quot; /&gt;&nbsp;&lt;/span&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E0NDAT&quot; style=&quot;background-color:transparent;color:rgb(36,169,57);&quot;&gt;&lt;img alt=&quot;LinkedIn&quot; height=&quot;16&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/round/linkedin.png&quot; style=&quot;border:none;vertical-align:middle;margin-bottom:2px;&quot; width=&quot;16&quot; /&gt;&lt;/a&gt;&nbsp;&lt;span style=&quot;white-space:nowrap;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;2&quot; /&gt;&nbsp;&lt;/span&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E7X880&quot; style=&quot;background-color:transparent;color:rgb(36,169,57);&quot;&gt;&lt;img alt=&quot;Skype&quot; height=&quot;16&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/round/skype.png&quot; style=&quot;border:none;vertical-align:middle;margin-bottom:2px;&quot; width=&quot;16&quot; /&gt;&lt;/a&gt;&nbsp;&lt;span style=&quot;white-space:nowrap;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;2&quot; /&gt;&nbsp;&lt;/span&gt;&lt;a href=&quot;https://htmlsig.com/t/000001E370BJ&quot; style=&quot;background-color:transparent;color:rgb(36,169,57);&quot;&gt;&lt;img alt=&quot;Youtube&quot; height=&quot;16&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/round/youtube.png&quot; style=&quot;border:none;vertical-align:middle;margin-bottom:2px;&quot; width=&quot;16&quot; /&gt;&lt;/a&gt;&nbsp;&lt;span style=&quot;white-space:nowrap;&quot;&gt;&lt;img alt=&quot;spacer.gif&quot; src=&quot;https://s3.amazonaws.com/htmlsig-assets/spacer.gif&quot; style=&quot;border:0px;vertical-align:middle;&quot; width=&quot;2&quot; /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;

&lt;div&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'U9aAKqghN7BAP8C','time_zone'=>'Australia/Hobart','currency_id'=>'2','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'$1.0','imagename'=>'0.jpeg','internal_mailer'=>'0','theme'=>'softed','language'=>'en_us','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Monday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'Planned','defaultactivitytype'=>'Call','hidecompletedevents'=>'0','defaultcalendarview'=>'ListView','currency_name'=>'Australia, Dollars','currency_code'=>'AUD','currency_symbol'=>'&#36;','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'8');
?>