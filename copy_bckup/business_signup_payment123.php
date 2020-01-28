<?php
include("header.php");

?>

	<h3 style="text-align:center;">Payment Method </h3><br>
       	<div id="welcomeDiv" class="answer_list" >
			<ul class="nav nav-pills nav-payment">
				<li><a data-toggle="pill" class="btn btn-default btn-lg disabled" href="#bank" id="pay13" >Bank Tranfer</a><br/></li>									
				<li><a data-toggle="pill" class="btn btn-default btn-lg disabled" href="#credit" id="pay14" >Credit Card</a><br/></li>
				<li>
<?php if($_SESSION["plan"] == 'Small'){ ?> 


<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6TM3D4A4P73EC">
<input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>-->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5JQHKAFNDEY54">
<input type="submit" value="Small" border="0" name="submit" id="Small" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>	
	
		
<?php } else if($_SESSION["plan"] == 'Medium'){ ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TNB8JU58MWJAN">
<input type="submit" value="Medium" border="0" id="Medium" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>

<?php } else if($_SESSION["plan"] == 'Large'){ ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="38G9GL2664GQA">
<input type="submit" value="Large" border="0" id="Large" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>

<?php } else if($_SESSION["plan"] == 'My360One'){ ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4TLERNA94ZPJQ">
<input type="submit" value="My360One" border="0" id="My360One" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
</form>



<?php }  ?></li>
								</ul>

	   </div>
  </div>
<?php include("footer.php"); ?>