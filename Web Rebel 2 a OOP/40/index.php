<?php include "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>
    </div>

    <?php 

        $data = $database->select('items', 'text');  //'*' miesto body
    ?>

    <ul class="list-group col-sm-5 pullquote-left">

        <?php 
            foreach ($data as $item ) {       // znamena ze prehbehneme pole data pocas kezdeho 1 prejazdu bude v item 1234 ulozena hodnota az kym nebudem en apooslednej hodnote pola
                echo  '<li class="list-group-item">' . $item . '</li>';
            }      

        ?>

    </ul>

    <form  id="add-form" class="col-sm-5 pullquote-right " action="_inc/add-new.php" method="post">
        <p class="form-group">
            <textarea class="form-control" name="message" id="text"  rows="3" placeholder="is tgere [ /watch?v=GO3wwqikkF0]"></textarea>
        </p>
        <p class="form-group">
            <input class="btn-sm btn-danger" type="submit" value="add new thing">
        </p>
        
    </form> 


<?php include "_partials/footer.php" ?>