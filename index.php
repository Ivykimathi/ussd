<<<<<<< HEAD
=======
<<<<<<< HEAD:index.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="0;url=C:\Users\HP\3D Objects\ussd&sms\index.php">
    <title>Document</title>
</head>
<body>
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
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
>>>>>>> 69e2878e10863766b9245cf4d7619aff50b35f3b:index.html
>>>>>>> a0974772b280634f88044b5396ead12526e1989e
</html>