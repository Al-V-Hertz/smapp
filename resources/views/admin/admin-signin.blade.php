<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin-login.css">
    <title>Sarimanok Enterprise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="John Albert S. Alay-ay">
    </head>
    <body>
    <div class="headbar">
        <div class="hbLeft">
            <h1>Sarimanok Enterprise</h1>
        </div>
    </div>
    <div class="jumbotron">
        <h1>We Only Serve Fresh, We Only Serve the Best</h1>
    </div>
    <div class="login_div">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h1>Sign In</h1>
            <input name="username" type="text" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
            <button name="login">Login</button>
        </form>
    </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</html>