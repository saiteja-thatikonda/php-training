<!DOCTYPE html>
<html>
<body>

<?php
$str = "<h1>thatikonda venkata sai teja!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr."<br>";



$int = 100.50;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Int is valid");
} else {
  echo("Int is not valid")."<br>";
}


$email = "saiteja@yahoo.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address")."<br>";
}

$url = "https://www.i95dev.com";

$url = filter_var($url, FILTER_SANITIZE_URL);

if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}



?>

</body>
</html>
