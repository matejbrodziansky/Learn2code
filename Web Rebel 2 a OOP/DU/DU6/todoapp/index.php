<?php include "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>

    <?php 
/*
    // testovacie zápisi 
        $data = [
            'text' => 'succes',
            'id' => '15'
        ];
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $json = json_encode ( $data); //json spracuje data vytvori jsoj zapis a ulozi sa do prememnej json

        echo '<pre>';
        print_r( $json );
        echo '</pre>';


        echo '<pre>';
        print_r( json_decode($json, true) ); //phpckovsky zapis
        echo '</pre>';
*/
    ?>




    <?php 

        $data = $database->select('items', [ 'id', 'text']);  //'*' miesto body
    ?>

    <ul id="item-list" class="list-group col-sm-5 pullquote-left">


        <?php 
            foreach ($data as $item ) {       // znamena ze prehbehneme pole data pocas kezdeho 1 prejazdu bude v item 1234 ulozena hodnota az kym nebudem en apooslednej hodnote pola
                echo '<li id="item-'. $item['id'] .'" class="list-group-item">';
                echo    $item['text'];
	            echo '  <div class="controls pull-right">';
	            echo '      <a href="edit.php?id='. $item['id'] .'" class="edit-link">edit</a>';
	            echo '      <a href="delete.php?id='. $item['id'] .'" class="delete-link text-muted glyphicon glyphicon-remove">X</a>';
	            echo '  </div>';
	            echo '</li>';
              //  echo '    <div class"controls pull-right">'; 
            }      
        ?>
    </ul>

    <form  id="add-form" class="col-sm-5 pullquote-right " action="_inc/add-item.php" method="post">
        <p class="form-group">
            <textarea class="form-control" name="message" id="text"  rows="3" placeholder="is tgere [ /watch?v=GO3wwqikkF0]"></textarea>
         </p>
         <p class="form-group submit-button">
            <input class="btn-sm btn-danger" type="submit" value="add new thing">
        </p>    
        
    </form> 


<?php include "_partials/footer.php" ?>