<?php

include_once "includes/functions.php";

if (isset($_FILES['file']) && !empty($_FILES['file'])) {
  $message = check_image($_FILES['file']);
  
  if (empty($message)) {
    $login = trim($_POST['login']);
    if (isset($login) && !empty($login)) {
      $img = '';

      $dir = __DIR__ . "/avatars";
  
      if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
      } 

      $file_name = uniqid("{$_POST['login']}_") . "." . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
      
      $new_file = "{$dir}/{$file_name}";
      
      if($old_file = glob("{$dir}/{$login}_*")){

        //Аватар у этого пользователя уже существует

        if (check_extension($old_file[0], $_FILES['file']['name'])) {
          move_uploaded_file($_FILES['file']['tmp_name'], $old_file[0]);
          $message = "Расширение совпадает. Перезаписали содержимое аватара";
          $img = pathinfo($old_file[0])['basename'];
        } else {
          unlink($old_file[0]);
          move_uploaded_file($_FILES['file']['tmp_name'], $new_file);
          $message = "Расширение не совпадает. Удалили старый, записали новый аватар";
          $img = pathinfo($new_file)['basename'];
        }
      } else {
        move_uploaded_file($_FILES['file']['tmp_name'], $new_file);
        $message = "Благодарим! Ваш аватар создан";
        $img = pathinfo($new_file)['basename'];
      }
    } else {
      $message = "Необходимо указать логин";
    }
  }
} 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="col-sm-3">
      <form method="post" enctype="multipart/form-data">
        <?php 
          if (isset($message) && !empty($message)) echo "<small class=\"form-text text-muted\">{$message}</small>";
          if (isset($img) && !empty($img)) echo "<img style=\"width: 200px;\" src=\"avatars/{$img}\">";
        ?>
        <div class="form-group">
          <label for="login">Логин</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="Ваш логин">
        </div><br>
        <div class="form-group">
          <input type="file" class="form-control" id="file" name="file">
        </div><br>
        <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
    </div>
  </div>
</body>
</html>