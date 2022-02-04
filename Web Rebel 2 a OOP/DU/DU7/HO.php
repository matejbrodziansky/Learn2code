<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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



echo '<pre>';
print_r ($data);
echo '</pre>';

?>

    <table>
        <tr>
            <th>idem #</th>
              <?php
               foreach ($data[0] as $key=>$value)
                 {
                    echo "<th>$key</th>".PHP_EOL;
                 }
                ?>
        </tr>
       
        <?php
           $index= 1;
            foreach ($data as $list) {
                if ( $index % 2 == 0 ) echo "<tr class='even'>";
                    else  echo "<tr class='odd'>"; 
                       echo "<td>$index</td";
                       echo "</tr>".PHP_EOL;      
                          foreach( $list as $think) {
                              echo "<td>$think</td>";
                        };
                          echo "</tr>".PHP_EOL;
                          $index++;                      
               }
            ?>
        </tr>
    </table>






    
</body>
</html>