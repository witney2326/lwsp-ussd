<?php
//variables sent via post
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text =="")
{
    $response = "CON What would you want to check \n";
    $response = "1. Account Number \n";
    $response = "2. Account Balance ";
}else if($text== "2")
    {
//Business logic for first level response
$response = "END your phone number is ".$phoneNumber;    
}else if($text == "1*1")
{
$accountNumber = "12345";
$response = "END Account number is ".$accountNumber;
}else if ($text == "1*2")
{
$balance = "MK 2000.00";
$balance = "END balance is".$balance;
}
    header('Content-type; text/plain');
    echo $response;
?>