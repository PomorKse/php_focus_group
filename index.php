<?php
  //Задача №1
  //Дан массив [33, 42, -7, -81, 11, -2, 21, 0, 5, 67]. По заданному пользователем индексу (должно быть числом) проверить существует ли данный элемент.

  //a) если нет, добавить элемент с введенным индексом и присвоить ему значение 0

  //b) если существует, то проверить, если его значение отрицательное, перезаписать его как положительное. проверить, если оно положительное, вывести следующий за ним элемент

  //c) если значение равно нулю, то переместить данный элемент в конец массива

  //Вывести введенный индекс и итоговый массив на экран.

/*  $arr = [33, 42, -7, -81, 11, -2, 21, 0, 5, 67];

  $index = readline('Insert an index ');

  if ($index >= 0 && is_numeric($index)) {

    if (isset($arr[$index])) {
      switch (true) {
        case ($arr[$index] < 0):
          $arr[$index] = abs($arr[$index]);
          echo "Элемент массива под индексом {$index} преобразован из отрицательного числа в положительное, записан как {$arr[$index]}" . PHP_EOL;
          break;
        case ($arr[$index] == 0):
          echo "Под индексом {$index} находился элемент со значением 0, он перемещен в конец массива." . PHP_EOL;
          array_push($arr, 0);
          unset($arr[$index]);
          break;
        default:
          echo "Под индексом {$index} в массиве находится число {$arr[$index]}. Следующий элемент {$arr[$index+1]}" . PHP_EOL;
          break;
      }
    } else {
      $arr[$index] = 0;
      echo "Под индексом {$index} элемента в массиве не было. Добавлен элемент под введеным индексом, ему присвоено значение 0" . PHP_EOL;
    }
  } else {
    echo "Введите целое число, которое равно или больше 0" . PHP_EOL;
  }

  var_dump($arr);
*/

  //Задача №2

  //Дан массив:
  /*
  [
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wednesday' => 'среда',
    'thursday' => 'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота'
    'sunday' => 'воскресенье'
  ]*/

/*
  $arr = [
    'monday' => 'понедельник',
    'tuesday' => 'вторник',
    'wednesday' => 'среда',
    'thursday' => 'четверг',
    'friday' => 'пятница',
    'saturday' => 'суббота',
    'sunday' => 'воскресенье'
  ];
  
  //a) сформировать 2 новых индексированных массива с днями на англ. и рус. языках

  $arr_en = array_keys($arr);
  $arr_ru = array_values($arr);

  //b) вывести оба массива в виде строк с разделителем ,

  echo 'Дни недели на английском языке: ' . implode(', ', $arr_en) . PHP_EOL;
  echo 'Дни недели на русском языке: ' . implode(', ', $arr_ru) . PHP_EOL;
*/

//Задание №3

/*
  $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum, nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis massa ut, interdum nisl.';

  //a) выяснить кол-во слов в тексте, если оно больше 50, вывести предупреждение о превышении данного лимита
  $arr_text_words = explode(' ', $text);

  if (count($arr_text_words) > 50) {
    echo "Текст превышает лимит в 50 слов. Количество слов " . count($arr_text_words) . PHP_EOL;
  }

  //b) выяснить кол-во предложений в данном тексте и вывести на экран
  $arr_text_sent = explode('.', $text);
  echo "Количество предложений в тексте " . (count($arr_text_sent) - 1) . PHP_EOL;

  //c) получить 5е предложение (Nam dictum ...), оно должно начинаться с маленькой буквы. удалить из него все точки, запятые и пробел в начале. пробелы между словами заменить на дефисы - и сформировать из этого предложения ссылку вида http://site.ru/news/(предложение). вывесит ссылку на экран.

  $sentence = str_replace(' ', '-', str_replace(',', '', lcfirst(trim($arr_text_sent[4]))));
  $link = 'http://site.ru/news/' . $sentence;
  echo $link . PHP_EOL;
*/