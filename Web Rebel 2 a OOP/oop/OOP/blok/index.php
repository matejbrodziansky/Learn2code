<?php

require 'src/DB.php';
require 'src/Blog.php';

$db = new DB('localhost', 'larablog', 'root', 'root');
$db->setFetchType( PDO::FETCH_ASSOC ); //14
$blog = new Blog($db);

var_dump(
    $blog->getPost(11)->title //15
);

echo '<hr>';

foreach ($blog->getPost() as $post )
{
    var_dump( $post->id );
    var_dump( $post->title );
    echo '<p>'. $post->text. '</p>';
}