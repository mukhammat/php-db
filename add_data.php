<?php

define ('RUN_FROM_PROGRAM', true);
require_once ('include/validation.php');
require_once ('include/connect_db.php');

// Параметры, которые мы ждем из формы
$keys = array ('your_name', 'email', 'homepage', 'captcha', 'message');
// Готовим очищенные параметры
$params = array ();
foreach ($keys as $key) {
    // Если требуемый параметр не указан, то выход
    if (!isset($_POST[$key])) die ('Не указаны параметры'.$key);
    // Указанное значение
    $val = $_POST[$key];

    // Валидация
    switch ($key) {
            case 'email': if (!is_email($val)) die ("E-mail указан не верно"); break;
            case 'homepage': if (!is_url($val)) die ('Homepage указан не верно'); break;
            case 'captcha': if (!is_captcha_right($val)) die ('Капча указана не верно'); break;
            case 'message': if (!is_message($val)) die ('Сообщение содержит некорректные данные'); break;
      }
      $params[$key] = $val;
}

// Определяем браузер
$params['browser'] = $_SERVER['HTTP_USER_AGENT'];

//Опредиляем ip пользователья
$params['ip'] = $_SERVER['REMOTE_ADDR'];

// Что-то не получилось.. Попробуем по другому
if (!$params['browser']) { 
    $browser_info = get_browser(null, true);
    $params['browser'] = $browser_info['browser'];
}

$sql = "INSERT INTO `users`(`user_id`, `user_name`) VALUES ([value-1],[value-2])";

$stmt = $conn->prepare("INSERT INTO `users`(`user_name`) VALUES ('$params['your_name']')
    .INSERT INTO `info`(`ip`, `browser`, `email`, `homepage`) VALUES ($params['ip'],$params['browser'],$params['email'],$params['homepage'])
    .INSERT INTO `guestbook`(`info_id`, `user_id`, `message`) VALUES ('1','1','$params['message']')");
$stmt->bind_param("sss", $firstname, $lastname, $email);


 




print_r($params['your_name']);

