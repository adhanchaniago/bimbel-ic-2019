<?php
//message
//$message = $_POST['msg'];
$message = "Test 0000000000000000000000000000000000000000000000000";
//mail body - image position, background, font color, font size...
$body ='<html>
<head>
<style>
body
{
background: #fff;
font-family: "lucida grande", tahoma, verdana;
font-size:16px;
font-weight: bold;
color: #fff;
}
.content{
overflow:hidden;
background-color: #336699;
margin: 10px;
padding:10px;
}
</style>
</head>
<body>
<div class="content">
<h1>My HTML Mail</h1>
'.$message.'<br />
<img src="http://phpform.net/images/contact2.png" /><br />
</div>
</body>';
//to send HTML mail, the Content-type header must be set:
$headers='MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
$headers .= 'From: System Admin <noreply@example.com>' . "\r\n";
$to="edyuty@gmail.com";
//$to = $_POST['to'];
$subject = "My HTML Mail";
//mail function
$mail = mail($to, $subject, $body, $headers);
if(!$mail) { 
echo "Error sending email"; 
} else {
echo "Your email was sent successfully.";
}
?>