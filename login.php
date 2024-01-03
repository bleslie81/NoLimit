<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .loginform{
            color:white;
            width: 60%;
            margin: 50px auto;
            padding: 15px;
            border: 1px dashed #010;
            border-radius: 5px;
            background: -webkit-linear-gradient(bottom,rgba(0,0,0,0),rgba(0,0,0,.8));
        }
        body{
            background: url('ai.jpg') no-repeat;
            background-size: cover;
            background-color: rgb(231,242,246);
        }
    </style>
</head>
<body>
    <div class="loginform">
        <form method="POST" action="validation.php">
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Felhasználónév:</label>
                <input type="email" class="form-control" name="formEmail" placeholder="email@example.com" required>
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Jelszó:</label>
                <input type="password" class="form-control" name="formPsw" placeholder="Password" value="formPsw" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Bejelentkezés</button>
        </form>
    </div>
</body>
</html>