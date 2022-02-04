<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>About Me </h1>
    </header>
    <a href=""></a>
    <?php   include "index.php"   ?>
    <div class="container">
        <h2>Personal information </h2>
        <section>
            <a href="<?php $admin->linkPicture() ?>"><img src="<?php $admin->linkPicture() ?>" alt="" height="250" width="300"></a>
            <p> <?php  $admin->fullName() ?> </p>
            <p> Email : <?php  $admin->linkEmail() ?> </p>
        </section>        
        <section>
            <a href="<?php $user->linkPicture() ?>"><img src="<?php $user->linkPicture() ?>" alt="" height="250" width="300"></a>
            <p> <?php  $user->fullName() ?> </p>
            <p> Email : <?php  $user->linkEmail() ?> </p>
        </section>        

        <div class="destroy-everything">
          <p>
              <?php $admin->destroyEverything()?>    
          </p> 
        </div>

    </div>    
    
</body>
</html>

