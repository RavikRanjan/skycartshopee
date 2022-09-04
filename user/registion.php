<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!--css-->
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now</h3>
            <?php

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };

            ?>
            <input type="text" name="fname" placeholder="Enter your name" required>
            <input type="number" name="number" placeholder="Enter your mobile number" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <input type="password" name="cpassword" placeholder="Enter confrom password" required>
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>already have a account? <a href="login.php">login now</a></p>
        </form>
    </div>
</body>
</html>