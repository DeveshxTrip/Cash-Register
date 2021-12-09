<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Kar lo</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="POST" action="register.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username;?>">
        </div>
        <div class="input-group">
            <label>email</label>
            <input type="text" name="email" value="<?php echo $email;?>">
        </div>
        <div class="input-group">
            <label>password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">submit</button>
        </div>
        <p>Already a member?<a href="login.php">sign in</a>
    </p>
    </form>
    
</body>
</html>