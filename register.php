<?php include ('server.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Task1</title>
</head>

<body>
    <form method="post" action="register.php">
        <div class="continar">
            <h1>Register</h1>
            <div>
                <label>Username</label> <br />
                <input type="text" name="UN" /> <br />
            </div>

            <div>
                <label>Email</label> <br />
                <input type="text" name="em" /> <br />
            </div>

            <div>
                <label>Password</label> <br />
                <input type="password" name="pw1" /> <br />
            </div>

            <div>
                <label>Confirm Password</label> <br />
                <input type="password" name="pw2" /> <br />
            </div>
            <button type="submit" name="register"> Register </button>
            <span> Already A member <a class="sn" href="./login.php">Signin </a></span>
        </div>

    </form>
</body>

</html>