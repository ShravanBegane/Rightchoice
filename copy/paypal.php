<?php
?>
<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AeNdQw05yrXumO1nGS5eLVEARjCmxwoL3KfhlEllXeW8COg33nux-jP1w_eBY1pIumnZCdSZUonxyxXi"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <script>
	  paypal.Buttons({
	    createOrder: function(data, actions) {
	      return actions.order.create({
	        purchase_units: [{
	          amount: {
	            value: '0.01'
	          }
	        }]
	      });
	    },
	    onApprove: function(data, actions) {
	      return actions.order.capture().then(function(details) {
	        alert('Transaction completed by ' + details.payer.name.given_name);
	        // Call your server to save the transaction
	        return fetch('/paypal-transaction-complete', {
	          method: 'post',
	          headers: {
	            'content-type': 'application/json'
	          },
	          body: JSON.stringify({
	            orderID: data.orderID
	          })
	        });
	      });
	    }
	  }).render('#paypal-button-container');
	</script>
</body>