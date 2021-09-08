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
        <h1 id="page-heading">All Articles</h1>
        <div class="article-card">
            <div class="sd1">
                <div class="sd2">
                    <h2>Staveley teenager 'died trying to save friend in canal'</h2>
                    <p>loVe stands for Global Vectors where global refers to global statistics of corpus and vectors are representations for words. Earlier word embeddings methods such as LSA, word2vec were able to learn syntactic and semantic relationship...</p>
            
                    <div class="article-metadata">
                        <img src="https://media-exp1.licdn.com/dms/image/C5103AQErpAxiFDAPcQ/profile-displayphoto-shrink_800_800/0/1544870677048?e=1636588800&v=beta&t=wLBh-hsSdGwCObUH6P_ACf0yY3zdzZPl-7xNWqnu-KI" alt="" style="border-radius: 50%;" width="20px" height="20px">  
                        <div class="author">Mubashir Ahmed</div>
                        &nbsp;| 
                        <div class="last-updated"><?php echo date("M j, Y"); ?></div>
                    </div>  
                </div>
                <img src="https://pbs.twimg.com/profile_images/1282075483782471687/898ZKVj5.jpg" alt="" class="article-img">
            </div>        
        </div>

        <div class="article-card">
            <div class="sd1">
                <div class="sd2">
                    <h2>Most Photos of Astronomical Objects are Photoshopped</h2>
                    <p>tars are hardly visible in big cities due to light pollution. Light-pollution camera filters block certain wavelengths in the emission spectrum of the atmosphere induced primarily by artificial lightings like street lights, signs, and other city...</p>
            
                    <div class="article-metadata">
                        <img src="https://pbs.twimg.com/profile_images/1282075483782471687/898ZKVj5.jpg" alt="" style="border-radius: 50%;" width="20px" height="20px">  
                        <div class="author">Haris Manzoor</div>
                        &nbsp;| 
                        <div class="last-updated"><?php echo date("M j, Y"); ?></div>
                    </div>  
                </div>
                <img src="https://media.wired.com/photos/5a593a7ff11e325008172bc2/master/pass/pulsar-831502910.jpg" alt="" class="article-img">
            </div>        
        </div>
        <div class="article-card">
            <div class="sd1">
                <div class="sd2">
                    <h2>Most Photos of Astronomical Objects are Photoshopped</h2>
                    <p>tars are hardly visible in big cities due to light pollution. Light-pollution camera filters block certain wavelengths in the emission spectrum of the atmosphere induced primarily by artificial lightings like street lights, signs, and other city...</p>
            
                    <div class="article-metadata">
                        <img src="https://pbs.twimg.com/profile_images/1282075483782471687/898ZKVj5.jpg" alt="" style="border-radius: 50%;" width="20px" height="20px">  
                        <div class="author">Mubashir Ahmed</div>
                        &nbsp;| 
                        <div class="last-updated"><?php echo date("M j, Y"); ?></div>
                    </div>  
                </div>
                <img src="https://miro.medium.com/max/1400/1*FonFRrGimHrTaOqdABzh9A.gif" alt="" class="article-img">
            </div>        
        </div>
    </div>
        
    <!-- Page Footer -->
    <div class="footer">
        &copy; 2021 netarchives.org | All Rights Reserved.
    </div>
</body>
</html>