<?php 

  require_once '_inc/config.php';

  $item = $database->get("items", "text", [
    "id" => $_GET['id']  // id ktore mame v linku na stranke
  ]);

  if ( ! $item )   // ak not item 
  {

    header ("HTTP/1.0 404 Not Found");
    include_once "404.php";
    die();

  }

  //kontrolny výpis
     //echo '<pre>';
    // print_r( $item);
   //echo '</pre>';


include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH EDIT</h1>
    </div>

  <div class="row">
    <form  id="edit-form" class="col-sm-5 pullquote-right " action="_inc/edit-new.php" method="post">
        <p class="form-group">
            <textarea class="form-control" name="message" id="text"  rows="3"><?php echo $item  ?></textarea>
         </p>
         
        <p class="form-group">
            <input class="btn-sm btn-danger" type="submit" value="edit item ">
        </p>   
        
    </form> 
  </div>


<?php include_once "_partials/footer.php" ?>