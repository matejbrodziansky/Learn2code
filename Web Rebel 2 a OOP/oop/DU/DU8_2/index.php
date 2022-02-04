<?php 

include_once './_patrials/header.php'; 

            echo '<ul class="" >';
            foreach ($fileUrl as $key => $value) {

              $selected = ( $id == $key)  ? 'selected' :  "" ;  
   
                $trimIt = array("products","/", ".jpg", ".png", "_", "-");
                $productName = ucfirst(trim(str_replace($trimIt, " " ,"$value"))); 
            
                echo '<li id="'. $key .'" class="links" >';
              	echo '	<a href="show.php?id='. $key .'" class="link '. $selected .' ">'. $productName .'</a>';
               	echo '</li>';        
            }
            echo '<ul>';
        ?>
    </div>
  </body>
</html>

