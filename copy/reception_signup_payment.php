<?php
include("header.php");

?>
<style type="text/css">
	
	.nav-payment-open>li>a {
	    padding: 0px 0px;
	    cursor: default;
	}
	.nav-payment-open>li {
		list-style: none;
    	width: 100%;
    	text-align: left;
    	padding: 6px 30px;
	}
	.nav-payment-open>li::before {
		content: "\203A";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
	  	color: orange; /* Change the color */
	  	font-weight: bold; /* If you want it to be bold */
	  	display: inline-block; /* Needed to add space between the bullet and the text */
	  	width: 1em; /* Also needed for space (tweak if needed) */
	  	margin-left: 0em; /* Also needed for space (tweak if needed) */
	  	font-size: 20px;
       font-family: 'Oxanium', cursive;
	}

	.buy_btn{
		width: 100%;
	    font-weight: 500;
	    font-size: 20px;
	   /* text-transform: uppercase;
	    border: 2px dashed black;
	    border-bottom-right-radius: 50px !important;
	    border-top-left-radius: 50px !important;
       font-family: 'Oxanium', cursive;*/
	}
	.buy_btn:hover{
		color: #000;
	}
	.btn_buy_submit{		
		background: inherit !important;
	}
	 .underline {
       text-decoration: none; 
       position: relative; 
       text-transform: uppercase;
       font-family: 'Oxanium', cursive;
     }   

    .underline:after {
        position: absolute;
        content: '';
        height: 2px;
		  /* adjust this to move up and down. you may have to adjust the line height of the paragraph if you move it down a lot. */
        bottom: -4px; 


       /****** 
       optional values below 
       ******/
        
        /* center - (optional) use with adjusting width   */
        margin: 0 auto;
		  left: 0;
        right: 0;
		  width: 50%;
		  background: green;
		  
		  /* optional animation */
		  -o-transition:.5s;
  		  -ms-transition:.5s;
        -moz-transition:.5s;
        -webkit-transition:.5s;
        transition:.5s;
    }
	 

	 /* optional hover classes used with anmiation */
	  .underline:hover:after {
		  width: 80%;
		  background: orange;
    }
    .plan_badge span{
    	padding: 4% 4%;
       font-family: 'Oxanium', cursive;
       font-size: 16px;
       font-weight: 300;
    }
    .plan_badge {
	    margin: 20px 0;
	}

</style>
<h3 class="underline" style="text-align:center;">Payment Methods </h3><br>
   <div id="welcomeDiv" class="answer_list" >
		<ul class="nav-payment-open">
			<li><a data-toggle="pill" class="buy_btn" href="#bank" id="pay13">Bank Tranfer</a><br/></li>									
			<li><a data-toggle="pill" class="buy_btn" href="#credit" id="pay14">Credit Card</a><br/></li>
		</ul>
		<div class="plan_badge">
			<span class="badge badge-secondary">Paying for : <?=$_SESSION["plan"];?> Plan </span>
		</div>
		<div class="payment-cont">
			<?php if($_SESSION["plan"] == 'Small'){ ?> 

				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="2MLNVFYJ42AGG">
					<input class="btn_buy_submit" type="image" src="https://dev.rightchoice.io/copy/resources/img/paypal-pay-now-button-png-15.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>


			<!-- <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="25WBUSUK6T388">
				<input type="image" src="https://www.sandbox.paypal.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form> -->

			<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="5JQHKAFNDEY54">
			<input type="submit" value="Small" border="0" name="submit" id="Small" alt="PayPal – The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form>-->	
	
		
			<?php } else if($_SESSION["plan"] == 'Medium'){ ?>

				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="76KYW4GA3AQNJ">
					<input class="btn_buy_submit" type="image" src="https://dev.rightchoice.io/copy/resources/img/paypal-pay-now-button-png-15.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>


			<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="TNB8JU58MWJAN">
				<input type="submit" value="Medium" border="0" id="Medium" name="submit" alt="PayPal – The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form> -->

			<?php } else if($_SESSION["plan"] == 'Large'){ ?>

				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="X82U7EAJSU2NG">
					<input class="btn_buy_submit" type="image" src="https://dev.rightchoice.io/copy/resources/img/paypal-pay-now-button-png-15.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>



			<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="38G9GL2664GQA">
			<input type="submit" value="Large" border="0" id="Large" name="submit" alt="PayPal – The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form> -->

			<?php } else if($_SESSION["plan"] == 'RightOne'){ ?>

				<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="2QVD8GE2CGKEE">
					<input class="btn_buy_submit" type="image" src="https://dev.rightchoice.io/copy/resources/img/paypal-pay-now-button-png-15.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>


		<!-- 	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="4TLERNA94ZPJQ">
			<input type="submit" value="My360One" border="0" id="My360One" name="submit" alt="PayPal – The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
			</form> -->



			<?php }  ?>
		</div>
		

  	</div>
  </div>
<?php include("footer.php"); ?>