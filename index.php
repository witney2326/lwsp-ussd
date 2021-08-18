<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];
$hh_code = $_GET["hh_name"];
$contractor_name = $_POST["contractor_name"];
$area_name = $_POST["area_name"];
$phone_number = $_POST["phone_number"];


//This is the first menu screen
if ($text == ""){
  $response  = "CON Welcome To OSS Platform \n";
  $response .= "1. Request for Service \n";
  $response .= "2. Pay/Contribute for Service \n";
  $response .= "3. Works Progress \n";

}
elseif ( $text == "1" ) {
  $response  = "CON  Request For Service \n";
  $response .= "1. Technology Choice \n";
  $response .= "2. Technology Cost \n";
  
}

else if ( $text == "1*1" ) {
  $response  = "CON  Technology Choice \n";
  $response .= "1. Single VIP Toilet \n";
  $response .= "2. Twin VIP Toilet \n"; 
  $response .= "3. Pour Flash Toilet \n"; 
  $response .= "4. Septic Tank \n";
}

else if ( $text == "1*1*1" ) {
  $response .= "END  Selected SVIP Toilet \n";
}
else if ( $text == "1*1*2" ) {
  $response .= "END  Selected TVIP Toilet \n";
}
else if ( $text == "1*1*3" ) {
  $response .= "END  Selected Pour Flash Toilet \n";
}
else if ( $text == "1*1*4" ) {
  $response  = "END  Selected Septic Tank \n";
}

else if ( $text == "1*2" ) {
  $response  = "CON  Technology Cost \n";
  $response .= "1. Single VIP Toilet \n";
  $response .= "2. Twin VIP Toilet \n"; 
  $response .= "3. Pour Flash Toilet \n"; 
  $response .= "4. Septic Tank \n"; 
}
else if ( $text == "1*2*1" ) {
  $svipcost  .= "MK45,000.00";
  $response = "END Single VIP Toilet costs ".$svipcost;
}
else if ( $text == "1*2*2" ) {
  $tvipcost  .= "MK46,000.00";
  $response = "END Twin VIP Toilet costs ".$tvipcost;
}
else if ( $text == "1*2*3" ) {
  $pfcost  .= "MK47,000.00";
  $response = "END Pour Flash  Toilet costs ".$pfcost;
}
else if ( $text == "1*2*4" ) {
  $stcost  .= "MK48,000.00";
  $response = "END Septic Tank costs ".$stcost;
}

if ( $text == "2" ) {
  $response  = "CON  Payment for Service  \n";
  $response .= "1. Airtel Money \n";
  $response .= "2. Mpamba \n";
  $response .= "3. Electronic Funds Transfer \n";
  $response .= "4. Direct Bank Deposit \n";
}
else if ( $text == "2*1" ) {
  $response  = "CON Payment Reference for AM \n";
  $response .= "1. Payment Reference \n";
}

else if ( $text == "2*1*1" ) {
  $response  = "CON  Enter Payment Reference \n";
}

else if ( $text == "2*2" ) {
  $response  = "CON  Payment Reference for Mpamba \n";
  $response .= "1. Payment Reference \n";
}
else if ( $text == "2*2*1" ) {
  $response  = "CON  Enter Payment Reference \n";
}

else if ( $text == "2*3" ) {
  $response  = "CON  Payment Reference for EFT \n";
  $response .= "1. Payment Reference \n";
}
else if ( $text == "2*3*1" ) {
  $response  = "CON  Enter Payment Reference \n";
}

else if ( $text == "2*4" ) {
  $response  = "CON  Payment Reference for Direct Deposit \n";
  $response .= "1. Payment Reference \n";
}
else if ( $text == "2*4*1" ) {
  $response  = "CON  Enter Payment Reference \n";
}
else if ( $text == "3" ) {
  $text .= "";
  $response  = "CON  Enter Household Code \n";
}


//echo response

header('Content-type: text/plain');
echo $response
?>