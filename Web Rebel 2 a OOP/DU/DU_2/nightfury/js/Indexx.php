<?php 

    //vytiahne info získame nazov php.suboru cez ktory sme prišli  na podstranku
    $_SERVER['SCRIPT_NAME']

    //pošlem funkcii udaje (nazov podstranky)
    echo basename$_SERVER['SCRIPT_NAME'], '.php');   // vola sa /gallery.php ked odpíšeme aj .php ostane iba gallery
    
    //premenna
    $page_name = echo basename$_SERVER['SCRIPT_NAME'], '.php')
    echo $page_name;   // body class dal class= "<?pghp echo $page_name; ?>">   //a hodi pekne css na všetky podstranky 

    // zmeni hodnotu 
    if ( $page_name == 'index') $page_name = 'home';  blog bude blog concact contact

    ucfirst($page_name) velke prve pismeno

    <?php 

    if ( $page_name == 'home') echo '<li><strong>Home</strong></li>'
    else echo '<li><strong>Home</strong></li>'

    if ( $page_name == 'home') echo '<li><a href="gallery.php">Gallery</a></li>'
    else echo '<li><a href="gallery.php">Gallery</a></li>'

    if ( $page_name == 'home') echo '<li><a href="blog.php">Blog</a></li>'
    else echo '<li><a href="blog.php">Blog</a></li>'

    if ( $page_name == 'home') echo '<li><a href="contact.php">Contact</a></li>'
    else echo '<li><a href="contact.php">Contact</a></li>'

    ?>


    <?php  

    print_r(glob('*.php') ); // prebehna adresar ktory určime  a vrati pole subor a adresarov ktore sa v nom nachadzaju *.php zobrazia sa iba php
    
    $page_name 
    
    if ( $page_name == 'home') echo '<li><a href="gallery.php">Gallery</a></li>'
    else echo '<li><a href="gallery.php">Gallery</a></li>'
    
    if ( $page_name == 'home') echo '<li><a href="blog.php">Blog</a></li>'
    else echo '<li><a href="blog.php">Blog</a></li>'
    
    if ( $page_name == 'home') echo '<li><a href="contact.php">Contact</a></li>'
    else echo '<li><a href="contact.php">Contact</a></li>'
    
    

    $page = glob('*php');
    print_r($pages);  //vypiseme

    foreach ( $pages as $file) {   //zober pole pages a po jednom kazdej jednej hodnotu uloz do new premennej file 
        
       // echo $file;
        //echo basename($file;'.php')
        $page = basename($file;'.php')

        if ( $page_name == $page) echo '<li><strong>'.'</strong></li>'
        else echo '<li><a href="gallery.php">Gallery</a></li>'

        echo '<hr>';
    }




   

    
    
?>

















<!-- 

include nam dovoli vložiť do stranky;  echo $_SERVER['SCRIPT_NAME']  <p> <php 'blablabla'; ? > </p>
echo nam dovoli vypisať zo stranky;


print_r je iny od echa tym že je to funkcia a tym padom musime napsiať jej meno a použiť ( a)a do nich posalť hodnotu ktoru chceme zapisovať 

bodka spoji dva stringy dokopy 'prd'.'hovno'

-->