<?php

require_once('include/connect_db.php');

$query = "SELECT `id`, `user_name`, `email`, `homepage`, `message`, `date`, `ip`, `browser` FROM `guestbook` ORDER BY guestbook.date DESC";
$result = mysqli_query($link, $query) or die(json_encode(array (
	'success' => false, 'message' => "Ошибка " . mysqli_error($link)
)));

$msg = '';
while ($array = mysqli_fetch_array($result)) {

	$msg .= <<<HTML

	<tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Homepage</th>
		<th>Message</th>
	</tr>
	<tr>
		<td>{$array['user_name']}</td>
		<td>{$array['email']}</td>
		<td>{$array['homepage']}</td>
		<td>{$array['message']}</td>
	</tr>
HTML;
}

echo json_encode(array (
	'success' => true, 'message' => $msg
));
