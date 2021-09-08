<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Page Header -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/header.php';?>
    <!-- Page Body -->

    <form action="">
        <h2>Login</h2>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="mubashir">

        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd" placeholder="********">

        <button type="submit">Login</button>
        <div class="form-bottom">Create Account instead! <a href="signup.php">Create Account!</a></div>
    </form>

    <!-- Page Footer -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/footer.php';?>
</body>
</html>