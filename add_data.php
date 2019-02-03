<?php

define ('RUN_FROM_PROGRAM', true);
require ('config.php');
require_once ('include/validation.php');

// Параметры, которые мы ждем из формы
$keys = array ('your_name', 'email', 'homepage', 'captcha', 'message');
// Готовим очищенные параметры
$params = array ();
foreach ($keys as $key) {
    // Если требуемый параметр не указан, то выход
    if (!isset($_POST[$key])) die ('Не указаны параметры');
    // Указанное значение
    $val = $_POST[$key];

    // Валидация
    switch ($key) {
          case 'email': if (!is_email($val)) die ("E-mail указан не верно"); break;
          case 'homepage': if (!is_url($val)) die ('Homepage указан не верно'); break;
          case 'captcha': if (!is_captcha($val) || is_captcha_right($val)) die ('Капча указана не верно'); break;
          case 'message': if (!is_message($val)) die ('Сообщение содержит некорректные данные'); break;
      }
      $params = $key;
}

// Определяем браузер
$params['browser'] = $_SERVER['HTTP_USER_AGENT'];
// Что-то не получилось.. Попробуем по другому
if (!$params['browser']) { 
    $browser_info = get_browser(null, true);
    $params['browser'] = $browser_info['browser'];
}

echo "$params";

