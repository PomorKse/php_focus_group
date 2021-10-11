<?php
  //Задача №1
  //Написать функцию подсчета суммы с учетом скидки. На вход принимает одноименный массив с ценами (можно генерировать перед вызовом функции) и скидку в % (целое число от 0 до 100). Проверять в фун-ии на правильный диапазон и если скидка равно 0 (значение по-умолчанию), то не применять ее. Должна возвращать итоговую сумму в виде числа.

/* $prices = [];

  for ($i=0; $i <= 5; $i++) { 
    $prices[] = rand(10, 1500);
  }
  
  $discount = readline('Input a discount ');

  function total ($prices, $discount) {
    if ($discount < 0) {
      echo 'Скидка должна быть больше 0' . PHP_EOL;
      return;
    }

    $sum = 0;
  
    foreach ($prices as $price) {
      if ($discount == 0) {
        $sum += $price;
      } else {
        $sum += $price - $price / 100 * $discount;
      }
    }

    return $sum;
 }

 echo 'В корзине товары стоимостью: ' . implode(', ', $prices) . PHP_EOL; 
 echo "С учетом скидки в {$discount} процентов итоговая сумма составляет " . total($prices, $discount) . " рублей" . PHP_EOL;
 */

//Задача № 2
//Написать 2 функции:
//a) возвращает правильную форму множественного числа, на вход принимает целое число (кол-во) и массив с 3мя элементами (формы мн. числа существительного). например:
//имя_функции(5, ['лайк', 'лайка', 'лайков']) вернет "5 лайков" или имя_функции(4, ['комментарий', 'комментария', 'комментариев']) вернет "4 комментария"

//b) возвращает сумму прописью (без копеек), на вход принимает целое число от 1 до 999 999

 /* $number = readline('Insert a number ');
  $like_endings_array = ['лайк', 'лайка', 'лайков'];
  $comment_endings_array = ['комментарий', 'комментария', 'комментариев'];*/
  /*$thousand_endings_array = ['тысяча', 'тысячи', 'тысяч'];

  function get_ending ($number, $arr) {
    if(!is_numeric($number)){
      echo 'Введите целое число. Вы ввели ';
      return;
    }
    
    if ($number % 100 > 10 && $number % 100 < 19) {
      return $arr[2];
    } else {
      if ($number % 10 == 1) {
        return $arr[0];
      } elseif ($number % 10 > 1 && $number % 10 < 5) {
        return $arr[1];
      } else {
        return $arr[2];
      }
    }

  }/*

  echo $number . ' ' . get_ending($number, $comment_endings_array) . PHP_EOL;*/


 /* $number = 859624;

  function sum_in_string($number) : string {
  global $thousand_endings_array;

    $arr_up_to_tens = ['', 'один','два','три','четыре','пять','шесть','семь', 'восемь', 'девять', 'десять', 'одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать', 'двадцать', 30 => 'тридцать', 40 => 'сорок',
    50 => 'пятьдесят', 60 => 'шестьдесят', 70 => 'семьдесят', 80 => 'восемьдесят',
    90 => 'девяносто', 100 => 'сто', 200 => 'двести', 300 => 'триста', 400 => 'четыреста', 500 => 'пятьсот', 600 => 'шестьсот', 700 => 'семьсот', 800 => 'восемьсот', 900 => 'девятьсот', 1000 => ' одна тысяча', 2000 => 'две тысячи'];

    $ones = floor($number % 10);
    $tens = $arr_up_to_tens[10 * (floor($number / 10) % 10)];
    $hundreds = $arr_up_to_tens[100 * (floor($number / 100) % 10)];
    $one_thousands = 1000 * (floor($number / 1000) % 10);
    $ten_thousands = 10000 * (floor($number / 10000) % 10);
    $hundred_thousands = 100000 * (floor($number / 100000) % 10);

    if ($number < 21) {
      $str_number = $arr_up_to_tens[$number];
      return $str_number;
    } elseif ($number < 3000) {
      $str_number = $arr_up_to_tens[1000 * floor($number / 1000)];
      $str_number .= ($hundreds != 0) ? ' ' . $hundreds : '';
      $str_number .= ($tens != 0) ? ' ' . $tens : '';
      $str_number .= ($ones != 0) ? ' ' . $arr_up_to_tens[$ones] : '';
      return $str_number;
    } elseif ($number < 1000000) {
      $str_number = ($hundred_thousands != 0) ? ' ' . $arr_up_to_tens[$hundred_thousands/1000] : '';


      if ($number >= 11000 && $number < 20000) {
        $str_number .= ($ten_thousands != 0) ? ' ' . $arr_up_to_tens[$number/1000] : '';
      } else {
        if ($number >= 21000 && $number < 23000) {
          $str_number .= ($ten_thousands != 0) ? ' ' . $arr_up_to_tens[$ten_thousands/1000] . ' ' : '';
          $str_number .= substr($arr_up_to_tens[$one_thousands], 0, -13);
        } else {
          $str_number .= ($ten_thousands != 0) ? ' ' . $arr_up_to_tens[$ten_thousands/1000] : '';
          $str_number .= ($one_thousands != 0) ? ' ' . $arr_up_to_tens[$one_thousands / 1000] : '';
        }
      }


      $str_number .= ($hundreds != 0) ? ' ' . get_ending($one_thousands / 1000, $thousand_endings_array) . ' ' . $hundreds : '';
      $str_number .= ($tens != 0) ? ' ' . $tens : '';
      $str_number .= ($ones != 0) ? ' ' . $arr_up_to_tens[$ones] : '';
      return $str_number;
    }
    

  }
  echo sum_in_string($number) . PHP_EOL;*/

//Задача № 3

//Написать функцию сортировки массива из строк по длине строк. За основу можно взять текст из домашнего задания к прошлому уроку или другой рыбу-текст (на латинице) и разбить его на слова. На вход должна принимать массив строк, возвращать его же, но отсортированный по возрастанию длины строки.

 /* $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel tempus erat. In sollicitudin nisl nisi, in cursus erat pulvinar et. In congue eleifend accumsan. Nam dictum, nibh a justo iaculis, at hendrerit dui condimentum. Nulla et malesuada elit. Etiam eu dolor et nulla lobortis lacinia malesuada quis lacus. Aliquam nec nibh porta, vehicula justo id, sodales eros. Nulla facilisi. Nulla quis dui volutpat, mattis massa ut, interdum nisl.';

  $arr_str = str_replace([' ', '.', ','], '', explode(' ', $text));

  function sorted_arr($arr) {
    usort($arr, fn ($a, $b) => strlen($a) - strlen($b));
    return $arr;
  }

  var_dump(sorted_arr($arr_str));*/

  //Задача № 4
  //Дан массив с названиями месяцев на нескольких языках. Массив с переводами должен находиться в файле months.php, а сами функции в файле translator.php. Вызовы функций делать из основного файла, например lesson5.php.
  
  include_once 'months.php';
  include_once 'translator.php';

  //a) написать функцию, которая возвращает массив месяцев для указанного языка. принимает на вход массив с переводами и язык в виде строки (по умолчанию 'en'). Добавить проверку на существование языка в массиве, в противном случае возвращать пустой массив.

  /* function translate($arr, $lang = 'en') : array {

      if (!array_key_exists($lang, $arr)) return [];

      return $arr[$lang];
    }

    var_dump(translate($translations, 'de'));*/

  //b) написать функцию, которая на вход принимает массив с переводами, язык в виде строки (по умолчанию 'en') и номер месяца (1-12, по умолчанию 1, т.е. январь). Должна возвращать название месяца на указанном языке. Добавить проверку на существование языка в массиве и на правильность номера месяца.

  function translate_month($arr, $lang = 'en', $month = 1) : string {

    if ((!array_key_exists($lang, $arr)) || ($month < 1 || $month > 12)) return '';
    return $arr[$lang][$month - 1];
  }

  var_dump(translate_month($translations, 'es', 2));

  