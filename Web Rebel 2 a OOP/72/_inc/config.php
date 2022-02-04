<?php




    // require stuff
    require_once 'vendor/autoload.php';

    //global variables
    $base_url = 'http://localhost:8888/learn2code/todoapp';
    


    // Using Medoo namespace    
    use Medoo\Medoo;

    //conect to db
    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'todo',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',

    ]);

   // echo '<pre>';
   // print_r ( $database->info());
   // echo '</pre>';  

   // global functions

   function show_404()
   {
        header("HTTP/1.0 404 Not Found");
        include_once "404.php";
        die();
   }

function get_item()
{
    
    // if we have no id, or if id is empty
    if ( ! isset($_GET['id']) ||  empty($_GET['id']) ) {
        return false;    // ak narazi na returm dalej nepokracuje funkcia 
    }


    global $database;  // aby naslo premmenu lebo je vyssie 
    
    $item = $database->get("items", "text", [
        "id" => $_GET['id']  // id ktore mame v linku na stranke
      ]);
    
      if ( ! $item ){   // ak not item    
        return false;
        show_404();
    
      }

    return $item;
}


function is_ajax()
{
  returm (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
   strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
}

function is_even( $number )  //parameter 
{
 
  return $number % 2 == 0;  

}

var_dump(is_even( 4 ));  // tieto hodnuty čo posielame do fun sa volaju argumenty 