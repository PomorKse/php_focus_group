<?php

$login = $_POST['login'] ?? '';
$message = $_POST['message']  ?? '';//

require "includes/functions.php";

$error['login'] = login_validation(trim($login));
$error['message'] = message_validation(trim($message));

if (isset($_POST['login']) && isset($_POST['message'])) {
  if (empty($error['login']) && empty($error['message'])) {

    //с) Если ошибок нет, сохранить все данные из формы в папку ads в файл с именем логин_из_формы.txt (каждое значение в новой строке), после сохранения перенаправить пользователя снова на форму
    $filename = "ads/" . strtolower($login) . ".txt";
    $data = $login . PHP_EOL . $message . PHP_EOL;
    file_put_contents($filename, $data, LOCK_EX|FILE_APPEND);
    header("Location: /?answer=Спасибо, сообщение отправлено!");
    die;


  } else {

    //b) При возникновении ошибок, выводить их под соответствующими полями ввода
    header("Location: /?login={$error['login']}&message={$error['message']}");
    die;

  }
}