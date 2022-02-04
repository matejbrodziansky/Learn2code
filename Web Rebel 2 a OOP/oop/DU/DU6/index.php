<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

    <title>Document</title>
</head>
  <body>

    <?php  

    $data = [
        [
            "title" => "The World's End",
            "genre" => "Sci-fi",
            "year"  => 2013,
            "gross" => 26004851
        ],
        [
            "title" => "Scott Pilgrim vs. the World",
            "genre" => "Sadness",
            "year"  => 2010,
            "gross" => 31524275
        ],
        [
            "title" => "Hot Fuzz",
            "genre" => "Buddy Cop",
            "year"  => 2007,
            "gross" => 23637265
        ],
        [
            "title" => "Shaun of the Dead",
            "genre" => "Zombie",
            "year"  => 2007,
            "gross" => 13542874
        ],
    ];

    ?>

        

    <table>
       <tr>
          <?php foreach ( $data[0] as $key => $value) : ?>
              <th><?= $key ?></th>
           <?php endforeach ?>
          </tr>
          <tr>
             <?php foreach ( $data as $key => $value) : ?>
                <?php foreach ( $value as $item) : ?>
                   <td><?= $item ?></td>
                <?php endforeach ?>
          </tr>
              <?php endforeach ?>
                
    </table> 
  </body>
</html>

<?php
// foreach ( $data[0] as $key => $value) {
//   echo '<pre>';
//   print_r($key);
//   echo '</pre>';
// }

// foreach ( $data as $key => $value) {
//   foreach ( $value as $item) {
//     echo '<pre>';
//     print_r($item);
//     echo '</pre>';
//   }
// }
?>