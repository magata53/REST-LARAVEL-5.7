<?php

$name = $_POST['name_costumer'];
$location = $_POST['location_storage'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8000",
  CURLOPT_URL => "http://localhost:8000/api/storage",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "name_costumer=".$name."&location_storage=".$location."&undefined=",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/x-www-form-urlencoded",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    header('Location: index.php');
}
?>