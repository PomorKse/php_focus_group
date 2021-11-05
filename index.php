<?php
include_once "includes/header.php";
include_once "form_process.php";

//1. Получать в скрипте методом GET (из адресной строки) параметр url с именем файла, который нужно подключить к странице. Например, адрес http://localhost/index.php?url=home должен подключить и вывести на страницу файл home.php, http://localhost/index.php?url=about подключит about.php и т.д. Реализовать структуру из 5ти файлов.
//a) В index.php должна быть базовая HTML разметка (страница с тегами html, head, body), список ссылок на все существующие страницы (в выше указанном формате) и php код.
?>
  <ul>
    <li><a href="?url=home">Home</a></li>
    <li><a href="?url=catalog">Catalog</a></li>
    <li><a href="?url=about">About</a></li>
    <li><a href="?url=contacts">Contacts</a></li>
  </ul>
  
  <?php
    //b) Если параметр url не передан, загружать файл home.php
    $url = $_GET['url'] ?? 'home';
    $path = mb_strtolower(trim($url)) . ".php";
    
    //c) Добавить проверку существования целевого файла, если его нет, подключить файл 404.php
    if (file_exists($path)) {
      include_once "$path";
    } else {
      include_once "404.php";
    }
    
    
    if (!isset($_GET['url']) && empty($_GET['url'])) : 
      if ((isset($_GET['answer']))) echo "<h2 style=\"color: red;\">{$_GET['answer']}</h2>";
    ?>

      <form action="form_process.php" method="post">
        <label for="login">Логин</label><br>
        <input type="text" name="login" placeholder="Ваш логин" value="<?=$login?>">
        <?php if ((isset($_GET['login']))) : ?>
          <small style="color: red;"><?=$_GET['login'];?></small>
        <?php endif; ?>
        <br><br>
        <label for="message">Сообщение</label><br>
        <textarea name="message" cols="30" rows="10" placeholder="Ваше сообщение"><?=$message?></textarea>
        <?php if ((isset($_GET['message']))): ?>
          <small style="color: red;"><?=$_GET['message'];?></small>
        <?php endif; ?>
        <br><br>
        <button type="submit">Отправить!</button>
      </form>

<?php endif;
    
include_once "includes/footer.php";
?>