<?php

function check_image(array $file) : string {
  $error = '';
  
  $extension = $file['type'];
  if ($extension === 'image/gif' || $extension === 'image/jpg' || $extension === 'image/png') {
    $error = '';
  } else {
    $error = "Необходимое расширение файла - .png, .gif или .jpg";
  }
  
  if ($file['size'] > 2000000) $error = "Файл не может превышать 2мб";
  
  return $error;
}

function check_extension($old, $new) : bool {
  $old_extension = pathinfo($old, PATHINFO_EXTENSION);
  $new_extension = pathinfo($new, PATHINFO_EXTENSION);

  if ($old_extension !== $new_extension) return false;

  return true;
}

?>