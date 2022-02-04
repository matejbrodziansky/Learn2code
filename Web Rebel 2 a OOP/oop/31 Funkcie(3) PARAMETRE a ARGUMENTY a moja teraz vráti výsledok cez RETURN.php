<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php  

  


// funkcie *********************************//

  function make_a_sweet_link_for_me( $dude )
  {

    echo '<a href="dude/>'. str_replace(' ', '-', strtolower($dude->who).'">');
    echo $dude->who;
    echo '</a>';
  }

  function get_comment_count( $data )
  {

      $count = 0;

      foreach ($data as $dude ) {
        
        $count = $count + $dude->comments;

      }

      return $count;  // vrati von z funkcie 
  }

  
  
  
  
  
  //konec japonec  funkcie *********************************//
  
  $adventure = [
    
    (object) [      
      'who' => 'Finn',
      'wat' => "Finn je mrdka ",
      'comments' => 4,
    ],
    
    (object) [      
      'who' => 'Jake',
      'wat' => "The fukcing awesome dog ",
      'comments' => 23,
    ],
    
    (object) [      
      'who' => 'Mates',
      'wat' => "The bad programmer ",
      'inventory' => [ 'Mackbook', 'Windows'],
      'comments' => 10,
      
    ],
    
    (object) [      
      'who' => 'Prd',
      'wat' => "He is fart loudly ",
      'comments' => 44,
    ],
    
    (object) [      
      'who' => 'Jackie',
      'wat' => "The smallest dog ",
      'comments' => 10,
    ],
  ];
  

  
  foreach ( $adventure as $dude )
  {
    echo '<article>';
    echo '<h4>'. make_a_sweet_link_for_me( $dude).'</h4>';
    echo '<p>'. $dude->wat.'</p>';
    echo '</article>';
    
    
    $all_comments = get_comment_count( $adventure );
    
    //echo $all_comments;
  }

    get_comment_count($adventure); // nič sa nevypíše  lebo sme povedali tam bude 91
    echo 91;
    echo '<br>';
    
   
    $x = get_comment_count($adventure); 
    echo $x;
    
  ?>

  <p>
    number of dudes: <strong><?php echo count($adventure) ?></strong><br>
    number of comments: <strong><?php echo get_comment_count($adventure) ?></strong><br>
  
  </p>

 <!-- 


   -->
    
</body>
</html>