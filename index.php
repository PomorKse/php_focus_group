<?php
  //Задача №1
  //Выяснить является ли введенный год високосным. В диапазоне от 0 до 2021.

/*
  $year = readline("Insert a year ");
  if ($year % 4 == 0){
    echo $year . ' год - високосный.' . PHP_EOL;
  } else {
    echo $year . ' год - не является високосным.' . PHP_EOL;
  }
*/

  //Задача №2
  // Получить от пользователя 3 значения: сторона A, сторона B и угол альфа.

  //a) проверить введенный угол, он должен быть в диапазоне от 1 до 90 градусов включительно. A и B целые числа больше нуля - стороны четырехугольника. если ввели неверные значения, вывести сообщение об этом

  //b) проверить является ли четырехугольник с введенными значениями квадратом или прямоугольником

  //c) проверить является ли четырехугольник с введенными значениями ромбом или параллелограммом.


/*  $a = (int) readline("Insert rectangle side A ");
  $b = (int) readline("Insert rectangle side B ");
  $angle_a = (int) readline("Insert an angle alpha ");

  if ($a > 0 && $b > 0 && ($angle_a >= 1 && $angle_a <= 90)) {
    if ($angle_a == 90) {
      if ($a == $b) {
        $s = $a * $a;
        echo "Прямоугольник является квадратом с площадью {$s}." . PHP_EOL;
      } else {
        $s = $a * $b;
        echo "Прямоугольник не является квадратом, его площадь {$s}." . PHP_EOL;
      }
    } else {
      if ($a == $b) {
        $s = ($a * $a) * sin(deg2rad($angle_a));
        echo "Прямоугольник является ромбом с площадью {$s}." . PHP_EOL;
      } else {
        $s = $a * $b * sin(deg2rad($angle_a));
        echo "Прямоугольник является параллелограммом, его площадь {$s}." . PHP_EOL;
      }
    }
  } else {
    echo "Введите целым числом стороны А и В прямоугольника, атакже угол Альфа в диапозоне от 1 до 90." . PHP_EOL;
  }
*/

  //Задача №3
  
  
  $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus <a href="http://localhost/1.jpg" class="btn">erat</a>. In sollicitudin <span class="dotted">nisl nisi</span>, in cursus erat pulvinar et. In <a href="https://wikipedia.org/2.png" class="btn">congue</a> eleifend accumsan."';
  
  //b) добавить класс btn-success к 1й ссылке, а ко 2й - btn-primary
  
  $second_btn_position = strripos($text, 'btn');
  $text_with_btn = str_replace('btn', 'btn btn-success', substr($text, 0, $second_btn_position));
  $text_with_btn .= str_replace('btn', 'btn btn-primary', substr($text, $second_btn_position));
  
  //c) заменить обе ссылки (href) на http://example.com/(файл) (имя файла оставить без изменений)
  //a) добавить к обоим тегам <a> атрибут target="_blank"

  $first_href = substr($text, 0, strpos($text, 'g"') + 2);//65-67 и 75-77 функция бы пригодилась :)
  $first_href = substr($first_href, strpos($first_href, 'href="') + 6);
  $file_name = substr(strrchr($first_href, "/"), 1);

  
  $second_href_position = strripos($text_with_btn, 'href');
  $rest_text = substr($text_with_btn, $second_href_position);
  
  $new_text = str_replace($first_href, 'http://example.com/' . $file_name . ' target="_blank"', substr($text_with_btn, 0, $second_href_position));
  
  $second_href = substr($rest_text, 0, strpos($rest_text, 'g"') + 2);
  $second_href = substr($second_href, strpos($second_href, 'href="') + 6);
  $file_name = substr(strrchr($second_href, "/"), 1);
  
  
  
  $new_text .= str_replace($second_href, 'http://example.com/' . $file_name . ' target="_blank"', $rest_text);

  //Распечатать результат на экране.

  echo $new_text . PHP_EOL;
  