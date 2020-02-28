<head>
  <title>Payment</title>
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
         <div class="row" style="padding-top:40px;">
            <div class="col-md-3">
               
           </div>
            <div class="col-md-6 pay3">
				<div class="shruti">
                    <div class="pay5">
                        <img src="https://my360crm.com/wp-content/uploads/2018/10/logo1.png" alt="logo" width="30%">
                    </div>
                  <!--<h1 class="pay2">All-in-One Payment Platform</h1>-->
                  <br>
                 <h3 class="pay2">Payment method</h3>
                 
                 <div class="row">
                     <div class="col-md-2">
                         
                     </div>
                     <div class="col-md-8">
                        <div class="form10" style="padding-top:20px;font-size: 16px;">
							<label class="form50"><input type="radio" name="method" value="onetime" id="pay10"> One time payment</label>
							<label class="form50 form51" style="float:right;"><input type="radio" name="method" value="subscribe" id="pay11"> Subscription</label>
								<div class="form32" style="padding-top:20px !important;">
									    <iframe src="http://my360crm.urldiary.com/paypal_subscribe.php" width="400" height="400"></iframe>
								</div>
						</div>
						<div class="form21">
							<div style="text-align:center;padding-top:20px;">
								<h4>Pay with</h4>
								<ul class="nav nav-pills">
									<li ><a data-toggle="pill" href="#bank" id="pay13" class="disabled">Bank Tranfer</a></li>
									<li><a data-toggle="pill" href="#credit" id="pay14" class="disabled">Credit Card</a></li>
									<li class=""><a data-toggle="pill" href="#paypal" id="pay12">Paypal</a></li>
								</ul>
								<div class="tab-content">
									<div id="bank" class="tab-pane fade in">
										<p>Bank content</p>
									</div>
									<div id="credit" class="tab-pane fade">
										<p>credit card content</p>
									</div>
									<div id="paypal" class="tab-pane fade">											
										<iframe src="http://my360crm.urldiary.com/paypal_one_time.php" width="400" height="340"></iframe>
									</div>
								</div>
							</div>
							<div class="form4">
								<p></p>
							</div>
						</div>
					</div>
                    <div class="col-md-3">
                         
                    </div>
				</div>  <!-------------------Shruti-------------------->
                </div>
            </div>
           <div class="col-md-2">
               
           </div>
         </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".form21").hide();
	$(".form32").hide();
	$(".form41").hide();
	//$(".tab-content").hide();
	
    $("#pay10").click(function(){
		$("#bank").hide();
		$("#credit").hide();
		$("#paypal").hide();
		$(".form21").show();
		$(".form32").hide();
	});
	
	$("#pay11").click(function(){
		//$(".tab-content").hide();
		$(".form21").hide();
		$(".form32").show();
		
	});
	$("#pay12").click(function()
	{
		$("#paypal").show();	
	});
	$("#pay14").click(function()
	{
		$("#credit").show();	
	});
	$("#pay13").click(function()
	{
		$("#bank").show();	
	});

});


</script>
        
        
       
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
	font-size:32px;
    }
    .pay3
    {
     background: #fff;
    padding: 2px 2px;
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
    body
    {
        background:url('https://my360crm.com/wp-content/uploads/2019/04/bgcrm.jpg');
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
	
	a.disabled {
	pointer-events: none;
	cursor: default;
	color:darkgray;
}
	.nav>li>a 
	{
    position: relative;
    display: block;
    padding: 10px 24px;
    font-weight: 600;
    font-size: 14px;
	float:none;
	margin:4px;
	}


	#paypal
	{
	padding-top:20px;
	}
	
	.shruti
	{
	border: 1px double #000;
    outline: 2px solid #699;
    outline-offset: -9px;
	 padding: 40px 14px;

	}
	.nav-pills>li
	{
	float:none;
	}
	
 </style>