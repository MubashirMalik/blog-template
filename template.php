<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- External Style Sheets -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <!-- Page Header -->
    <?php require $_SERVER["DOCUMENT_ROOT"].'/blog-template/assets/header.php';?>
    <!-- Page Body -->
    <div class="inner">
        <div class="article-header">
            <h2 class="article-title">Lorem Ipsum - All the facts, Origin and Meaning</h2>

            <div class="article-metadata">
                <img src="https://media-exp1.licdn.com/dms/image/C5103AQErpAxiFDAPcQ/profile-displayphoto-shrink_800_800/0/1544870677048?e=1636588800&v=beta&t=wLBh-hsSdGwCObUH6P_ACf0yY3zdzZPl-7xNWqnu-KI" alt="" style="border-radius: 50%;" width="20px" height="20px">  
                <div class="author">Mubashir Ahmed</div>
                &nbsp;| 
                <div class="last-updated"><?php echo date("M j, Y"); ?></div>
            </div>

            <div class="social-links">
                <div><i class="fab fa-facebook-f fa-xs"></i></div>
                <div><i class="fab fa-twitter fa-xs"></i></div>
                <div><i class="fab fa-linkedin-in fa-xs"></i></div>
                <div><i class="fas fa-link fa-xs"></i></div>
            </div>
        </div>
        <div class="article-body">
            <div class="para">
                <h2>Heading 1</h2>
                <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>

            <div class="para">
                <h2>Heading 2</h2>
                <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br>
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </p>
            </div>
            <hr style="margin-bottom: 10px;">
            <div class="para">
                <h3>Comments (2)</h3>
                <hr style="margin-top: 10px; margin-bottom: 10px;">
                <p>
                    <h3>Mubashir</h3>
                    It is a great article useful for us
                    <div class="social-links">
                        <div><i class="far fa-thumbs-up fa-xs"></i></i></div>
                        <div><i class="far fa-thumbs-down fa-xs"></i></i></div>
                        <div><i class="far fa-flag fa-xs"></i></div>
                    </div>
                </p>
                <p>
                    <h3>Haris</h3>
                    What are your thoughts on Squarespace?
                    <div class="social-links">
                        <div><i class="far fa-thumbs-up fa-xs"></i></i></div>
                        <div><i class="far fa-thumbs-down fa-xs"></i></i></div>
                        <div><i class="far fa-flag fa-xs"></i></div>
                    </div>
                </p>
            </div>
        </div>
        <form action="" class="comment-form">
            <h3>Speak Your Mind</h3>
            <textarea name="" id="" cols="20" rows="5" placeholder="Write Comment"></textarea>
            <button>Post Comment</button>
        </form>
    </div>
    <!-- Page Footer -->
    <div class="footer">
        &copy; 2021 netarchives.org | All Rights Reserved.
    </div>
</body>
</html>