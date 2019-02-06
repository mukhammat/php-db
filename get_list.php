<?php

function show_list () {
    require_once('include/connect_db.php');
    $query = "SELECT `id`, `user_name`, `email`, `homepage`, `message`, `date`, `ip`, `browser` FROM `guestbook` ORDER BY guestbook.date DESC";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $array = mysqli_fetch_array($result);

    do{
        echo "<tr><th>User Name</th><th>Email</th><th>Homepage</th><th>Message</th></tr>".
                "<tr><td>".$array['user_name']."</td><td>".$array['email']."</td><td>".$array['homepage']."</td><td>".$array['message']."</td></tr>";
    }
    while($array = mysqli_fetch_array($result));
}

echo show_list();