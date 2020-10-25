<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "https://data.covid19.go.id/public/api/update.json");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($curl);
  curl_close($curl);

  $data = json_decode($output, true);
?>