
<?php
//post
$url="www.way2sms.com/api/v1/sendCampaign";
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=CMZOO2FYDEW8QU572XCOS7EYG5Q4KQ1F&secret=BCDOI2HTIWVVZSEX&usetype=prod&phone=6350354461&senderid=6350354461&message=hello");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>