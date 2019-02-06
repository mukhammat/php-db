<?php

require_once ('include/validation.php');
require_once ('include/connect_db.php');

header('Content-Type: text/html; charset=utf-8');

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
            case 'email': if (!is_email($val)) die (json_encode(array ('success' => false, 'message' => "E-mail указан не верно"))); break;
            case 'homepage': if (!is_url($val)) die (json_encode(array ('success' => false, 'message' => 'Homepage указан не верно'))); break;
            case 'captcha': if (!is_captcha_right($val)) die (json_encode(array ('success' => false, 'message' => 'Капча указана не верно'))); break;
            case 'message': if (!is_message($val)) die (json_encode(array ('success' => false, 'message' => 'Сообщение содержит некорректные данные'))); break;
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
};

//Запрос на запись в бд
$sql = "INSERT INTO `guestbook`(`user_name`, `email`, `homepage`, `message`, `ip`, `browser`)"
." VALUES (?,?,?,?,?,?)";

$stmt = $link->prepare($sql);
$stmt = mysqli_prepare($link, $sql);

//Check
if($stmt) {
    mysqli_stmt_bind_param($stmt, "ssssss",
        $params['your_name'], $params['email'], $params['homepage'],
        $params['message'], $params['ip'],$params['browser']
    );
    mysqli_stmt_execute($stmt);
}
else {
    die (json_encode (array ('success' => false, 'message' => 'Ошибка с базой данных')));
}

mysqli_stmt_close($stmt);
// close connect
mysqli_close($link);
echo json_encode (array ('success' => true));
