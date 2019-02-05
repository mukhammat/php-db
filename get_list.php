<?php

function show_list () {
    require_once('include/connect_db.php');
    $query = "SELECT `id`, `user_name`, `email`, `homepage`, `message`, `date`, `ip`, `browser` FROM `guestbook` ORDER BY guestbook.date DESC";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $array = mysqli_fetch_array($result);

    do{
        echo "<tr><td>Name:".$array['user_name']
            ."</td><br/><td>Email:".$array['email']."</td><br/><td>Homepage:"
            .$array['homepage']."</td><br/><td>Message:".$array['message']
            ."</td><br/></tr><br />";
    }
    while($array = mysqli_fetch_array($result));
}

echo show_list();