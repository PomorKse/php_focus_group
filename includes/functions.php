<?php
//2. Реализовать отправку формы (form.zip) на form_process.php методом POST. Все поля формы не должны быть пустыми.
//a) Логин должно быть от 3 до 20 латинских символов, текст сообщения не должен превышать 250 символов или 50 слов


function login_validation(string $login) : string
{
  if (empty($login)) return 'Логин не должен быть пустым!';
  if (!ctype_alpha($login)) return 'Логин должен состоять только из латинских букв!';
  if ((strlen($login) < 3) || (strlen($login) > 20)) return 'Логин из латинских букв в количестве от 3 до 20!';

  return '';
}

function message_validation(string $message) : string
{
  if (empty($message)) return 'Сообщение не должно быть пустым!';
  if ($message > 250) return 'Сообщение не должно превышать 250 символов!';
  if ((count(explode(' ', $message))) > 50) return 'Сообщение не должно превышать 50 слов!';

  return '';
}

