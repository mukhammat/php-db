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
        <p class="h1">Guestbook</p>
        <form action="add_data.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Your name:</label>
                <input type="text" name="your_name" class="form-control" id="formGroupExampleInput" placeholder="Brain" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">E-mail:</label>
                <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="brain22@iop.ii" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">HomePage:</label>
                <input type="text" name="homepage" class="form-control" id="formGroupExampleInput2" value="http://">
            </div>
            <div class="form-group">
                <img src="captcha.php" />
                <input type="text" name="captcha"  class="form-control" required>
                <div class="g-recaptcha" data-sitekey="6Lc5Oo8UAAAAAOrpFMc9ueFbTR0g-5kLTAw4zL54"></div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Message:</label>
                <textarea class="form-control" id="formGroupExampleInput2" name="message" rows="5" cols="45" required> </textarea>
            </div>
            <input type="submit" value="Send" class="btn btn-primary">
        </form>

        <?php
            require_once('include/connect_db.php');

            $query ="SELECT `id`, `user_name`, `email`, `homepage`, `message`, `date`, `ip`, `browser` FROM `guestbook` WHERE 1";
            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
            $array = mysqli_fetch_array($result);
            
            do{
                echo "<tr><td>Name:".$array['user_name']."</td><br/><td>Email:".$array['email']."</td><br/><td>Homepage:".$array['homepage']."</td><br/><td>Message:".$array['message']."</td><br/></tr><br />";
            }
            while($array = mysqli_fetch_array($result));
        ?>

        


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
