<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Font Awesome CDN-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Page Header -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/header.php';?>
    <!-- Page Body -->

    <form action="">
        <h2>Contact Us</h2>

        <label for="name">Your Name</label>
        <input type="text" name="name" id="name" placeholder="mubashir">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="imubashir@example.com">

        <label for="">Your Message</label>
        <textarea name="message" id="" cols="30" rows="10">Need to talk? We're listening…</textarea>

        <button type="submit">Send <i class="fa fa-paper-plane fa-xs" style="transform: translateY(-1px);"></i></button> 
    </form>

    <!-- Page Footer -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/footer.php';?>
</body>
</html>