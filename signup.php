<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Page Header -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/header.php';?>
    <!-- Page Body -->

    <form action="">

        <h2>Registration Form</h2>

        <div class="message">
            Passwords must be at least 8 characters long!
        </div>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="mubashir">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="imubashir@example.com">

        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" placeholder="********">

        <label for="conf-pwd">Confirm Password</label>
        <input type="password" name="conf-pwd" id="conf-pwd" placeholder="********">

        <button type="submit">Create Account</button>
        <div class="form-bottom">Already have an account? <a href="login.php">Log in!</a></div>
    </form>
    <!-- Page Footer -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/footer.php';?>
</body>
</html>