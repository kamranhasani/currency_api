<?php
 //header('Content-Type: application/json; charset=utf-8');
$url="https://api.currencyapi.com/v3/latest?apikey=TOKEN_KEY";


$client = curl_init(); 
curl_setopt($client, CURLOPT_URL, $url);  
curl_setopt($client,CURLOPT_RETURNTRANSFER,true); 
$response = curl_exec($client); 
curl_close($client);
$result = json_decode($response) ;

$BTC= $result->data->BTC->value;
$ETH= $result->data->ETH->value;
$USDT= $result->data->USDT->value;
$LTC= $result->data->LTC->value;
$XRP= $result->data->XRP->value;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body >
<div class="section search-result-wrap" style="dir:rtl;">
		<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bitcoin</td>
      <td><?php echo mb_substr(strip_tags($BTC),0,7,'utf8');?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ethereum</td>
      <td><?php echo mb_substr(strip_tags($ETH),0,7,'utf8');?></td>
    
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tether</td> 
      <td><?php echo mb_substr(strip_tags($USDT),0,7,'utf8');?></td>
   
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Litecoin</td> 
      <td><?php echo mb_substr(strip_tags($LTC),0,7,'utf8');?></td>
    
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>TRON</td>
      <td><?php echo mb_substr(strip_tags($XRP),0,7,'utf8');?></td>
     
    </tr>
  </tbody>
</table>


</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
