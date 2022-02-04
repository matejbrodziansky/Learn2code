<?php


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
  return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
   strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
}

function is_even( $number )  //parameter 
{
 
  return $number % 2 == 0;  

}

//var_dump(is_even( 4 ));  // tieto hodnuty čo posielame do fun sa volaju argumenty 

function get_parrity ( $number)
{

  return is_even($number) ? 'even' : 'odd';

}

function redirect( $page, $status_code = 302 )
{

  global $base_url;  //mohlo by byť global $base_url, $hovno  viac globalnych v jednom riadku su aj localne premenne
  
  if ( $page == 'back')
  {
    $location = $_SERVER['HTTP_REFERER'];   // vrati sa   na stranku z ktorej sme prišli   
  }
  else 
  {
    $page = ltrim($page, '/');   // odsekne z lavej strany  kontroluje stranky z lomitkom bez a tak 
    $location = "$base_url/$page";
  }
  
  header("Location: $location", true, $status_code);
  die();
}






//echo '<pre>';
//print_r( func_get_args() ); // vypise čo je redirecte 
//echo '<pre>';