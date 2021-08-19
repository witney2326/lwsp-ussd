<?php
// variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"]; 

$response = '';

$textArr = explode('*', $text); 
$level = count($textArr);

if ( $textArr[0] == null ) {

  // This is the first request. 
  $response = "CON Welcome to To LWSP OSS Platform \n";
  $response .= "1. Registration \n";
  $response .= "2. Request for Service \n";
  $response .= "3. Pay/Contribute for Service \n";
  $response .= "4. Works Progress \n";
}
elseif ($text == "1") {
  // when user respond with option one to register
  $response = "CON Choose Registration \n";
  $response .= "1. Household \n";
  $response .= "2. Contractor \n";
  $response .= "3. Supervisor \n";
  $response .= "4. Ward Committee \n";
}
elseif ($text == "1*1") {
  // registering users
  $response = "CON Please enter Household name";
}
elseif ($textArr[0] == 1 && $textArr[1] == 1 && $level == 3) {
  $response = "CON Please enter your Area";
}
elseif ($textArr[0] == 1 && $textArr[1] == 1 && $level == 4) {
  $response = "CON Please enter your Block Name";
}
elseif ($textArr[0] == 1 && $textArr[1] == 1 && $level == 5) {
  // save data in the database
  $response = "END Household data has been captured successfully! Thank you LWSP.";
}

elseif ($text == "1*2") {
  // registering contractors
  $response = "CON Please enter Contractor name";
}
elseif ($textArr[0] == 1 && $textArr[1] == 2 && $level == 3) {
  $response = "CON Please enter  Area of operation";
}
elseif ($textArr[0] == 1 && $textArr[1] == 2 && $level == 4) {
  $response = "CON Please enter your email address";
}
elseif ($textArr[0] == 1 && $textArr[1] == 2 && $level == 5) {
  // save data in the database
  $response = "END contractor data has been captured successfully! Thank you LWSP.";
}

elseif ($text == "1*3") {
  // registering supervisors
  $response = "CON Please enter Supervisor name";
}
elseif ($textArr[0] == 1 && $textArr[1] == 3 && $level == 3) {
  $response = "CON Please enter  Area of operation";
}
elseif ($textArr[0] == 1 && $textArr[1] == 3 && $level == 4) {
  $response = "CON Please enter your email address";
}
elseif ($textArr[0] == 1 && $textArr[1] == 3 && $level == 5) {
  // save data in the database
  $response = "END supervisor data has been captured successfully! Thank you LWSP.";
}

elseif ($text == "1*4") {
  // registering ward committee
  $response = "CON Please enter ward committee name";
}
elseif ($textArr[0] == 1 && $textArr[1] == 4 && $level == 3) {
  $response = "CON Please enter  Area of operation";
}
elseif ($textArr[0] == 1 && $textArr[1] == 4 && $level == 4) {
  $response = "CON Please enter your email address";
}
elseif ($textArr[0] == 1 && $textArr[1] == 4 && $level == 5) {
  // save data in the database
  $response = "END ward commitee data has been captured successfully! Thank you LWSP.";
}


else if ( $text == "2" ) {
  $response  = "CON Request For Service \n";
  $response .= "1. Technology Choice \n";
  $response .= "2. Technology Cost \n";
}

//else if (array_key_exists(1, $textArr) ) { 
//	$respon =  "CON Enter Your Household Code \n";

//}

// check here
else if ( $text == "2*1" ) {
  $response  = "CON  Technology Choice \n";
  $response .= "1. Single VIP Toilet \n";
  $response .= "2. Twin VIP Toilet \n"; 
  $response .= "3. Pour Flash Toilet \n"; 
  $response .= "4. Septic Tank \n";
}

//else if ($text=2*1*1 ) {
 // $response = "CON Enter Name For Selected Single VIP Toilet";
 // $response = "END  Selected SVIP Toilet \n";
//}

elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 1 && $level == 3) {
  $response = "CON Please enter your HH Code";
}
elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 1 && $level == 4) {
  // save data in the database
  $response = "END Selected Single VIP Toilet has been captured successfully! Thank you LWSP.";
}

//else if ( $text == "2*1*2" ) {
  //$response .= "END  Selected TVIP Toilet \n";
//}
elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 2 && $level == 3) {
  $response = "CON Please enter your HH Code";
}
elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 2 && $level == 4) {
  // save data in the database
  $response = "END Selected Twin VIP Toilet has been captured successfully! Thank you LWSP.";
}


elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 3 && $level == 3) {
  $response = "CON Please enter your HH Code";
}
elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 3 && $level == 4) {
  // save data in the database
  $response = "END Selected Pour Flash Toilet has been captured successfully! Thank you LWSP.";
}


elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 4 && $level == 3) {
  $response = "CON Please enter your HH Code";
}
elseif ($textArr[0] == 2 && $textArr[1] == 1 && $textArr[2] == 4 && $level == 4) {
  // save data in the database
  $response = "END Selected Septic Tank has been captured successfully! Thank you LWSP.";
}

else if ( $text == "2*2" ) {
  $response  = "CON  Technology Cost \n";
  $response .= "1. Single VIP Toilet \n";
  $response .= "2. Twin VIP Toilet \n"; 
  $response .= "3. Pour Flash Toilet \n"; 
  $response .= "4. Septic Tank \n"; 
}
else if ( $text == "2*2*1" ) {
  $svipcost  = "MK45,000.00";
  $response = "END Single VIP Toilet costs ".$svipcost;
  
}
else if ( $text == "2*2*2" ) {
  $tvipcost  = "MK46,000.00";
  $response = "END Twin VIP Toilet costs ".$tvipcost;
}
else if ( $text == "2*2*3" ) {
  $pfcost  = "MK47,000.00";
  $response = "END Pour Flash  Toilet costs ".$pfcost;
}
else if ( $text == "2*2*4" ) {
  $stcost  = "MK48,000.00";
  $response = "END Septic Tank costs ".$stcost;
}

if ( $text == "3" ) {
  $response  = "CON  Payment for Service  \n";
  $response .= "1. Airtel Money \n";
  $response .= "2. Mpamba \n";
  $response .= "3. Electronic Funds Transfer \n";
  $response .= "4. Direct Bank Deposit \n";
}

//Start payment recording Airtel Money
elseif ($textArr[0] == 3 && $textArr[1] == 1  && $level == 2) {
  $response = "CON Please enter your Household Code";
}
elseif ($textArr[0] == 3 && $textArr[1] == 1  && $level == 3) {
  $response = "CON Please enter Amount Paid on Airtel Money";
}
elseif ($textArr[0] == 3 && $textArr[1] == 1  && $level == 4) {
  $response = "CON Please enter Payment Reference on Airtel Money";
}
elseif ($textArr[0] == 3 && $textArr[1] == 1  && $level == 5) {
  // save data in the database
  $response = "END Payment has been captured successfully --- waiting verification! Thank you LWSP.";
}
//End payment recording Airtel Money

//Start payment recording Mpamba
elseif ($textArr[0] == 3 && $textArr[1] == 2  && $level == 2) {
  $response = "CON Please enter your Household Code";
}
elseif ($textArr[0] == 3 && $textArr[1] == 2  && $level == 3) {
  $response = "CON Please enter Amount Paid on Mpamba";
}
elseif ($textArr[0] == 3 && $textArr[1] == 2  && $level == 4) {
  $response = "CON Please enter Payment Reference on Mpamba";
}
elseif ($textArr[0] == 3 && $textArr[1] == 2  && $level == 5) {
  // save data in the database
  $response = "END Payment has been captured successfully --- waiting verification! Thank you LWSP.";
}
//End payment recording Mpamba

//Start payment recording EFT
elseif ($textArr[0] == 3 && $textArr[1] == 3  && $level == 2) {
  $response = "CON Please enter your Household Code";
}
elseif ($textArr[0] == 3 && $textArr[1] == 3  && $level == 3) {
  $response = "CON Please enter Amount Paid on EFT";
}
elseif ($textArr[0] == 3 && $textArr[1] == 3  && $level == 4) {
  $response = "CON Please enter Payment Reference on EFT";
}
elseif ($textArr[0] == 3 && $textArr[1] == 3  && $level == 5) {
  // save data in the database
  $response = "END Payment has been captured successfully --- waiting verification! Thank you LWSP.";
}
//End payment recording EFT

//Start payment recording DBD
elseif ($textArr[0] == 3 && $textArr[1] == 4  && $level == 2) {
  $response = "CON Please enter your Household Code";
}
elseif ($textArr[0] == 3 && $textArr[1] == 4  && $level == 3) {
  $response = "CON Please enter Amount Paid on Direct Bank Deposit";
}
elseif ($textArr[0] == 3 && $textArr[1] == 4  && $level == 4) {
  $response = "CON Please enter Payment Reference on Direct Bank Deposit";
}
elseif ($textArr[0] == 3 && $textArr[1] == 4  && $level == 5) {
  // save data in the database
  $response = "END Payment has been captured successfully --- waiting verification! Thank you LWSP.";
}
//End payment recording DBD


if ($textArr[0] == 4 && $level == 1) {
  $response = "CON Please enter your Household Code";
}
elseif ($textArr[0] == 4 && $level == 2) {
  $progress = "20%";//to fetch from database
  $response = "END Current Works Progress for Household is ".$progress;
}

header('Content-type: text/plain');
echo $response
?>