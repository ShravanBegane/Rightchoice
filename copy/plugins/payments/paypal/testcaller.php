<?php

$payment_json_string = '{
  "intent": "sale",
  "payer": {
    "payment_method": "paypal"
  },
  "transactions": [{
    "amount": {
      "total": "30.11",
      "currency": "USD",
      "details": {
        "subtotal": "30.00",
        "tax": "0.07",
        "shipping": "0.03",
        "handling_fee": "1.00",
        "shipping_discount": "-1.00",
        "insurance": "0.01"
      }
    },
    "description": "This is the payment transaction description.",
    "custom": "EBAY_EMS_90048630024435",
    "invoice_number": "48787589673",
    "payment_options": {
      "allowed_payment_method": "INSTANT_FUNDING_SOURCE"
    },
    "soft_descriptor": "ECHI5786786",
    "item_list": {
      "items": [{
        "name": "hat",
        "description": "Brown color hat",
        "quantity": "5",
        "price": "3",
        "tax": "0.01",
        "sku": "1",
        "currency": "USD"
      }, {
        "name": "handbag",
        "description": "Black color hand bag",
        "quantity": "1",
        "price": "15",
        "tax": "0.02",
        "sku": "product34",
        "currency": "USD"
      }],
      "shipping_address": {
        "recipient_name": "Hello World",
        "line1": "4thFloor",
        "line2": "unit#34",
        "city": "SAn Jose",
        "country_code": "US",
        "postal_code": "95131",
        "phone": "011862212345678",
        "state": "CA"
      }
    }
  }],
  "note_to_payer": "Contact us for any questions on your order.",
  "redirect_urls": {
    "return_url": "https://example.com",
    "cancel_url": "https://example.com"
  }
}';

$ch = curl_init();
		$headers  = [
		            'Content-Type: application/json',
		            'Authorization: Bearer A21AAHCZY1pg9b4HUd1765mygtM7ej2OCQqD0TkKRf0lD0gO-rFQUG2aI5ad42zsVSHyVxLdrA7Ww904-NkYOdL6RzBWgvPjA'
		        ];
		$postData = $payment_json_string;
		curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/payments/payment');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);           
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result     = curl_exec ($ch);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		// $decoded = json_decode($result);
		echo "<pre>";
		print_r(json_decode($result));



// $payment_url = 'https://api.sandbox.paypal.com/v1/payments/payment/'.'PAYID-LZPVL6Y9S86735307323991H'.'/execute';

// 		$postData = [
// 			"payer_id"=> 'paypal'
// 		];

// 		$ch = curl_init();
// 		$headers  = [
// 		            'Content-Type: application/json',
// 		            'Authorization: Bearer A21AAHCZY1pg9b4HUd1765mygtM7ej2OCQqD0TkKRf0lD0gO-rFQUG2aI5ad42zsVSHyVxLdrA7Ww904-NkYOdL6RzBWgvPjA'
// 		        ];
// 		curl_setopt($ch, CURLOPT_URL, $payment_url);
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));           
// 		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// 		$result     = curl_exec ($ch);
// 		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// 		// $decoded = json_decode($result);
// 			echo "<pre>";
// 		print_r(json_decode($result));