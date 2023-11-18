<?php 
$var1 = array(0 => "Temp min.");
$var2 = array(0 => "Temp max.");
$var4_des = array(0 => "Desc. Symbol");
$array = array();

$file = 'http://api.tempo.com/index.php?api_lang=br&localidad=12999&affiliate_id=tcypqcbv8817';
if ($xml = simplexml_load_file($file)) {
  $i = 0;
  $nday = 1;
  $url = $xml->location->attributes()->city;
  $array = explode('[', $url);

  foreach ($xml->location->var as $var) {
    switch ($i) {
      case 0:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var1 = $var1 + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
      case 1:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var2 = $var2 + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
      case 3:
        $j = 0;
        for ($j = 0; $j < $nday; $j++) {
          $var4_des = $var4_des + array($j + 1 => htmlentities($xml->location->var[$i]->data->forecast[$j]->attributes()->value, ENT_COMPAT, 'UTF-8'));
        }
        break;
    }
    $i++;
  }
}
$i = 1;