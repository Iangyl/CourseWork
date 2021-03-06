<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/autorizationStyle.css">
        <link rel="stylesheet" href="../bootcss/bootstrap.min.css">
        <title>Managment</title>
    </head>
    <body>
        <form name="login-form" class="form-login" action="../php/autorization.php" method="post">
            <div class="header">
                <h1>Autorization</h1>
            </div>
            <div class="form-group inputClass">
                <label style="font-family: 'Roboto';" for="text">Login:</label>
                <input type="text" name="username" class="form-control" id="text" placeholder="login" required/>
            </div>
            <div class="form-group inputClass">
                <label style="font-family: 'Roboto';" for="pwd">Enter password:</label>
                <input type="password" name="password" class="form-control" id="pwd" placeholder="password" required/>
            </div>
            <div class="footer">
                <input type="submit" name="submit" value="Log in" id="button" class="btn btn-primary" />
            </div>
        </form>
    </body>
</html>