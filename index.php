<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">Hello World</h1>

        <form action="add_data.php" method="post">
            <p>Your name:<br /><input type="text" name="your_name" /></p>
            <p>E-mail:<br /><input type="email" name="email" /></p>
            <p>HomePage:<br /><input type="text" name="homepage" /></p>
            <p>Cap:<br /><input type="text" name="captcha" /></p>
            <p>Message:<br />
            <textarea name="message" rows="5" cols="45"> </textarea></p>
            <p><input type="submit" value="Send"></p>
        </form>

        


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
