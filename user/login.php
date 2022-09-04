<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!--css-->
    <link rel="stylesheet" href="style.css"/>


</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            
            <?php

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class = "error-msg">'.$error.'</span>';
                    };
                };

            ?>

            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have a account? <a href="registion.php">register now</a></p>
        </form>
    </div>
</body>
</html>