<?php
  //Задача №1
  $a = 3;
  $b = 7;
  $h = 4;

  $s = (($a + $b) / 2) * $h;
  echo "Площадь трапеции - " . $s . "\n";

  //Задача №2
  $num = 541967;
  $a = substr($num, 0, 2);
  $b = substr($num, 2, 2);
  $c = substr($num, 4, 2);

  $sum = $a + $b + $c;
  
  $d = substr($num, 0, 3);
  $e = substr($num, 3, 3);
  
  $prod = $d * $e;

  echo "Сумма пар чисел - " . $sum . "\n";
  echo "Произведение первой и второй половины - " . $prod . "\n";

//Задание №3
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis dolor massa ut, interdum nisl.";

$new_text = strtolower(str_replace('dolor', '<i>dolor</i>', str_replace('.', ';</li><li>', $text)));

echo '<ol><li>' . substr($new_text, 0, -4) . '</ol>';