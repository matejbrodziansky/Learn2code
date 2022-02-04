<?php 

include_once 'config.php'; 

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

    <title>Document</title>
</head>
  <body>

    <?php  

echo '<hr>';
echo 'a';
echo '<hr>';
//************************** */
//************ a *********** */
//************************** */
$li = 6;

echo '<ul>';
for ( $i=1; $i <= $li; $i++ )
{   
    if( $i == 0  || $i <= ''){
        echo 'Musíš zadať číšlo ';
        break;
    } else {     
        echo "<li>$i hodnota</li>";
    };
}
echo '</ul>';

echo '<hr>';
echo 'b';
echo '<hr>';

//************************** */
//************ b *********** */
//************************** */

$number= 50;

for ( $i=1; $i <= $number; $i++ )
{   
    if($i == $number){
        echo $i;
    }else {
        echo "$i-";
    }
}

//************************** */
//************ c *********** */
//************************** */
echo '<hr>';
echo 'c';
echo '<hr>';

$ol = 2;

echo '<ol>';
for ( $i=1; $i <= $ol; $i++ )
{          
    echo '<li class="links" >';
	echo '	<a href="show.php?id='. $i .'" class="link">záznam '. $i .',</a>';
	echo '	<a href="edit.php?id='. $i .'" class="link">edit</a>';
	echo '	<a href="delete.php?id='. $i .'" class="link">delete</a>';
	echo '</li>';
    
}
echo '</ol>';



//************************** */
//************ d *********** */
//************************** */
echo '<hr>';
echo 'd';
echo '<hr>';

//$thumbs = glob("img/*.{jpg,png,gif}", GLOB_BRACE);
//echo $thumbs;

$dir_name = "img/";
//$images = glob($dir_name."*.png");   //ide
//$images = glob("$dir_name*.{png,jpg}", GLOB_BRACE); //ide
$images = glob("$dir_name*.{png,jpg}", GLOB_BRACE);



echo '<ol>';
foreach($images as $image) {


  echo '<pre>';
  $trimIt = array("img","/", ".jpg", ".png", "_", "-");
  $imagee = ucfirst(trim(str_replace($trimIt, " " ,"$image"))); //pozor na white spaces lebo ucfirst dalo velke tie čo neurobé nič 


  echo '<li class="images"> '. $imagee .'
             <a href="'. $image .'">
                 <img height="50px" width="50px"  src="'.$image.'"/>
             </a> 
        </li>';


}
echo '</ol>';


?>

  </body>
</html>

