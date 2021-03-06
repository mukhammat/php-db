<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Гостевая книга</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>

    <div class="container-fluid">
    <div class="row">
    <div class="col-md-4">

        <h1>Add message</h1>
        <form id="form" method="post" action="add_data.php">
            <div class="form-group">
                <label for="formGroupExampleInput">Your name:</label>
                <input id="name" type="text" name="user_name" class="form-control" placeholder="Brain" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">E-mail:</label>
                <input id="email" type="email" name="email" class="form-control" placeholder="brain22@iop.ii" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">HomePage:</label>
                <input type="text" name="homepage" class="form-control" value="http://">
            </div>
            <div class="form-group">
                <img src="captcha.php" />
                <input id="captcha" type="number" name="captcha"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Message:</label>
                <textarea id="message" class="form-control" name="message" rows="5" cols="45" required> </textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-secondary" type="reset" value="Clear fields">
            </div>
            <div id="errors"></div>
            <input type="submit" value="Send" class="btn btn-primary">
        </form>

        </div>
        <div class="col-md-8">

            <h1>List</h1>
            <div id="list"></div>

        </div>
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/model.js"></script>
    </body>
</html>
