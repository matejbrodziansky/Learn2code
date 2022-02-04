<?php  include_once "variables.php";

class User
{
    public $first_name;
    public $last_name;
    public $email;
    public $avatar;

    
    public function __construct($first_name, $last_name, $email, $avatar)
    {
        $this->first_name      = $first_name;
        $this->last_name       = $last_name;
        $this->email           = $email;
        $this->avatar           = $avatar;
    }

    public function fullName()
    {

        echo 'My name is : ' . $this->first_name . ' ' . $this->last_name ;
    }
    public function linkPicture()
    {

        echo  $this->avatar ;
    }

    public function linkEmail()
    {
        $email = $this->email;
        echo '<a href="'. $email .'">'. $email . '</a>' ;

    }
}

class Admin extends User
{

    public function fullName()
    {

        echo '[admin] : ' . $this->first_name . '' . $this->last_name ;
    }

    public function destroyEverything()
    {
        echo '<a href="">[admin] : ' . $this->first_name .' Destroy everything !!!!</a>';
    }



}


//$user = new User('Mates', 'Brodz', 'matejbrodz@gmail.com', 'https://content.techgig.com/thumb/msid-79844104,width-860,resizemode-4/5-Best-programming-languages-to-learn-in-2021.jpg?140622');

// echo '<pre>';
// print_r($user);
// echo '</pre>';
//$user->fullName();



