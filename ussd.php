<?php
$session =$_POST["sessionId"];
$service =$_POST["serviceCode"];
$phone= $_POST["phoneNumber"];
$text =$_POST["text"];

if ($text == ""){
    //first request has nothing in it
    $response="CON What do you want to check\n";
    $response ="1. Account Details";
    $response = "2. Phone Number";
}else if($text =="1"){
    $response = "CON Choose Acount Information you want to see\n";
    $response="1. Account Number";
    $response="2. Account Balance";
}elseif ($text=="2") {
    # code... About the phone number
    $response = "END Your phone number is:". $phone;
}elseif ($text == "1*1") {
    # code...Account details , Account number
    $accountNumber="ADFGHJQ";  //hard coded
    $response="END Your Account Number is:". $accountNumber;
}elseif ($text== "1*2") {
    # code...Account balance
    $accountBalance="Ksh 103584";
    $response="END Your Account Blance is:". $accountBalance;
}
header("Content type:text/plane");
echo $response;

?>