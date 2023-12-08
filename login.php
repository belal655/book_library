<?php include ('server.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Task1</title>
</head>

<body>
    <form method="post" action="login.php">
        <div class="continar">
            <h1>Login</h1>
            <div>
                <label>Username</label> <br />
                <input type="text" name="UN" /> <br />
            </div>

            <div>
                <label>Password</label> <br />
                <input type="password" name="pw1" /> <br />
            </div>

            <button class="lg" type="submit" name="login">Login</button>
            <span>
                Not a member <a class="sn" href="./register.php">Register </a></span>
        </div>
    </form>
</body>

</html>