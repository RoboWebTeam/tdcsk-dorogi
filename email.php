<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
// $email = $_POST['email'];
$message = $_POST['message'];


$login = htmlspecialchars($login);
$phone = htmlspecialchars($phone);
// $email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$login = urldecode($login);
$phone = urldecode($phone);
// $email = urldecode($email);
$message = urldecode($message);

$login = trim($login);
$phone = trim($phone);
// $email = trim($email);
$message = trim($message);

if (mail("205208@mail.ru",
"Новое письмо с сайта",
"Name: ".$name."\n".
"Phone: ".$phone."\n".
// "Email: ".$email."\n".
"Message: ".$message."\n".
/*"From: no-reply@mydomain.ru \r\n"*/)

) {
    function Redirect($url, $permanent = false)
  {
      header('Location: ' . $url, true, $permanent ? 301 : 302);
  
      exit();
  }
  
  Redirect('https://gk-kosmos.ru/contacts.html', false);
  }
  else {
      echo ("Есть ошибки ! Проверьте данные...");
  }

?>