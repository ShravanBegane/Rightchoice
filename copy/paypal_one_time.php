<head>
  <title>One time Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
</head>
  
 <section>
     <div class="container pricing2">
         <div class="row price1">
             <!--<h2 class="capture3">Payment</h2>-->
           
         </div>
         <div class="row">
            <div class="col-md-3">
               
           </div>
            <div class="col-md-6 pay3">
                    <div class="pay5">
                        <img src="https://my360crm.com/wp-content/uploads/2019/05/PayPal.png" alt="logo" width="40%">
                        <h5>(One Time Payment)</h5>
                    </div>
                  <!--<h1 class="pay2">All-in-One Payment Platform</h1>-->
                 
                 <!--<h3 class="pay2">Payment method</h3>-->
                 
                 <div class="row">
                     <div class="col-md-3">
                         
                     </div>
                     <div class="col-md-6">
										<!-----------------------------------One time payment form------------------------------------>
											<form name="myForm" id="paymentform" action="https://www.paypal.com/cgi-bin/webscr" method="post" novalidate="novalidate" target="print_popup"  onsubmit="window.open('about:blank','print_popup','width=650,height=500');">	  	        
											<div>
												<div>
													<select name="currency_code" id="currency" class="currency" required />
														<option value="AUD">AUD</option>
														<option value="USD">USD</option>
														<option value="NZD">NZD</option>  
														<option value="HKD">HKD</option>
													</select>
												</div>
											</div><br>
											<div class="clear"></div>
											<div>
												<div>
													<input type="text" id="amount" name="amount" size="29" placeholder="Amount*" required />
												</div>
											</div><br>
											<div>
												<div>
													<input type="text" id="pay_email" name="pay_email" size="29" placeholder="Email*" required />
												</div>
											</div>
											<div><br>
												<input type="hidden" value="0" name="no_shipping">
												<input type="hidden" value="1" name="no_note">
												<input type="hidden" value="3FWGC6LFTMTUG" name="mrb">
												<input type="hidden" value="IC_Sample" name="bn">
												<input type="hidden" value="" name="return">
												<input type="hidden" value="Reference" name="on0">
												<input type="hidden" value="_xclick" name="cmd">
												<input type="hidden" value="billing@my360crm.com" name="business">
												<input type="hidden" value="MY360 CRM Payment" name="item_name">	
												<input type="submit" name="Submit" value="Pay" id="paynw-btn" class="pay7"><br>
											</div>				
										</form>
										
										<!-----------------------------------One time payment form------------------------------------>
                     <div class="col-md-3">
                         
                     </div>
                 </div>
                 
           
            </div>
           <div class="col-md-3">
               
           </div>
         </div>
    </div>
</section>


 <style>
 
  .capture3
    {
    font-size: 38px;
    /*color: #1291f9;*/
    color:#fff;
    text-align: center;
    font-weight:700;
    }
    .pay1
    {
    line-height: 2em;
    font-weight: 600;
    font-size: 16px;
    }
    .pay2
    {
        text-align;center !important;
        /*color:#fff;*/
    }
    h3.pay2 
    {
    text-align: center;
    }
    .pay3
    {
        background: #fff;
    padding: 14px;
    border: 1px solid #000;
    box-shadow: 1px 2px 1px 0px #000;
    }
    .pay4
    {
        padding: 3.625rem 0 6.0625rem 0;
     background-color: rgba(18, 6, 103, 0.3);
     color:#fff;
    }
    .pay5
    {
        text-align:center;
    }
    .pay6
    {
        color:#fff;
        text-align:center;
        line-height: 2em;
        font-size: 16px;
    }
   
    .pay7
    {
    color: #fff;
    font-weight: bolder;
    box-shadow: 1px 1px 1px 1px #000;
    background: linear-gradient(to right, #ff9f3a, #ff7c57);
	padding: 8px 20px 8px 20px;
    border: 1px;
	margin-top:10px;
    }
    
    .pay8
    {
    box-shadow: 1px 1px 1px 1px #000;
    background: linear-gradient(to right, #ff9f3a, #ff7c57);
    padding: 4px 25px 4px 25px;
    border: 0px;
    font-weight: 600;
    color:#fff;
    }
    .pay9
    {
        font-size:32px;
        color:#fff;
        padding-bottom:20px;
    }
	select
	{
		width: 100%;
		padding: 10px;
	}
	input#amount
	{
		width: 100%;
		padding: 10px;
	}
	input#pay_email
	{
		width: 100%;
		padding: 10px;
	|
	.form31
	{
		padding-top:20px !important;
	}
	#pay11
	{
		color: darkgray;
	}
	label.form50
	{
		font-size: 16px !important;
    padding-top: 22px !important;
	}
	label.form50.form51
	{
		font-size: 16px !important;
		padding-top: 22px !important;
		
	}

	
	.form51
	
	color:darkgray;
	float:right;
	}
 </style>