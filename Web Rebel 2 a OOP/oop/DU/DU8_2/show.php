<?php 

include_once './assets/config.php'; 
include_once './_patrials/header.php'; 



foreach ($fileUrl  as $key => $picture) {

    $picture = "$picture/images/";
    
        if ( $id == $key) {
             $picture = glob("$picture*.jpg", GLOB_BRACE);

            foreach ($picture as $image) {
             echo '<li class="images">
                        <a href="'. $image .'">
                            <img height="50px" width="50px"  src="'.$image.'"/>
                         </a> 
                    </li>';
             }       
         }
} 

?>



