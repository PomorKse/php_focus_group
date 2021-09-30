<?php
  //Задача №1
  //С помощью цикла (без использования % и implode) вывести на экран только десятки (10, 20, 30 ...) из диапазона от 10 до 200 включительно. Числа разделить запятыми, после последнего числа должна быть точка.

  /* for ($i=10; $i <= 200; $i += 10) { 
    if ($i == 200) echo "$i." . PHP_EOL; else echo "$i, ";
  }*/

  //Задача №2
  //Сформировать массив из 15 случайных целых чисел из интервала от -100 до 100 включительно. Вывести его на экран.
  //a) посчитать и вывести сумму всех нечетных элементов массива
  //b) найти минимальный элемент в массиве и вывести его на экран

  /*$arr = [];
    $sum = 0;
    $min = 100;

    for ($i=0; $i <= 15 ; $i++) { 
      $arr[] = rand(-100, 100);
      if ($i % 2 != 0) {
        $sum += $arr[$i];
      }
      if ($arr[$i] < $min) {
        $min = $arr[$i];
      }
    }

    var_dump($arr);
    echo 'Сумма всех элементов массива: ' . $sum . PHP_EOL;
    echo 'Минимальный элемент массива: ' . $min . PHP_EOL;
  */
  

  //Задача №3
  //Вывести с помощью циклов "треугольник"

  /*for ($i = 1; $i < 10; $i++) { 
    for ($n = 0; $n < $i; $n++) { 
      echo $i;
    }
    echo PHP_EOL;
  }

  for ($i = 9; $i > 0; $i--) { 
    for ($n = $i; $n > 0; $n--) { 
      echo $i;
    }
    echo PHP_EOL;
  }*/
  

  //Задача №4
  //Есть массив с днями недели на нескольких языках. Запрашивать повторный ввод (в пунктах a и b), если пользователь ввел неправильные данные (элемент не существует или неверный индекс).

  //a) по заданному языку вывести все дни недели в обратном порядке

  //b) с помощью цикла по заданному номеру вывести день недели на каждом языке

  //с) вывести на экран все элементы массива, языки в виде ненумерованного списка (<ul>), а дни недели в виде нумерованных подсписков (<ol>)


$arr = [
  'ru' => ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'],
  'en' => ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'],
  'de' => ['montag', 'dienstag', 'mittwoch', 'donnerstag', 'freitag', 'samstag', 'sonntag'],
  'fr' => ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'],
  'it' => ['lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato', 'domenica'],
  'es' => ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'],
];


/*  $ask_lang = true;
  $ask_day = true;

  while($ask_lang){

    $lang = readline('Language in two symbols (ru/en/de/fr/it/es): ');

    if (array_key_exists($lang, $arr)) {
      for ($index=count($arr[$lang]) - 1; $index >= 0 ; $index--) { 
        echo $arr[$lang][$index] . ' ';
      }
      echo PHP_EOL;

      //Заправшиваем день недели
      while($ask_day){

        $day = readline('Insert day (0-6): ');
    
        if ($day > 0 && $day < 7) {
          echo 'День недели: ' . $arr[$lang][$day] . PHP_EOL;
          $ask_day = false;//Выход из цикла при верном вводе языка
        } else {
          echo 'Вы ввели неверный день недели. Повторите попытку.' . PHP_EOL;//Продолжаем спрашивать день
        }
      }
      $ask_lang = false;//Выход из цикла при верном вводе дня
    } else {
      echo 'Введите язык, согласно предложенной рекоммендации.' . PHP_EOL;//Продолжаем спрашивать язык
    }
  }
*/

echo "<ul>" . PHP_EOL;
  foreach ($arr as $lang => $days) {
    echo "\t<li>$lang" . PHP_EOL;
    echo "\t\t<ol>" . PHP_EOL;
    foreach ($days as $day) {
     echo "\t\t\t<li>$day</li>" . PHP_EOL;
    }
    echo "\t\t</ol>" . PHP_EOL;
    echo "\t</li>" . PHP_EOL;
  }
echo "</ul>" . PHP_EOL;
