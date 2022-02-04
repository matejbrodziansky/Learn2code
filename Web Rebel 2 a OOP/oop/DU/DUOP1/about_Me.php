<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php   include "index.php"   ?>
    <?php   include "variables"   ?>
    <header>
        <h1>About Meeeee</h1>    
            <p>My name is <?php echo 'hovnooo'?> </p>
    </header>

    <?php 

$user = new User('Mates', 'Brodz', 'mates@gmail.com', 'https://miro.medium.com/max/1400/0*lPCw4WxmuDmUwf5O');

// echo '<pre>';
// print_r($user);
// echo '</pre>';


$user->fullName();
    
    ?>
    
</body>
</html>

