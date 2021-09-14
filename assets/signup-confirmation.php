<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- External Style Sheets -->
    <link rel="stylesheet" href="/blog-template/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Page Header -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/header.php';?>
    <!-- Page Body -->
    <div class="inner" style="display: flex; flex-direction: column; align-items: center;">
        <h1 id="page-heading">Signup Success!</h1>
        <p>We have sent a verification email with the link to the address provided. Click on the link to verify.</p>
        <i class='fas fa-envelope fa-10x'></i>
    </div>
    <!-- Page Footer -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/footer.php';?>
</body>
</html>