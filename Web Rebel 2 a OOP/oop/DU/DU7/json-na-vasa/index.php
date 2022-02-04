<?php

include_once '_inc/header.php';


// toto najde vsetky albumy vasa patejdla na spotify
// ma tam ID: 0CbbftseLRwYyUdmOXvH6l
// staci zmenit to ID v adrese a ID ineho interpreta a vypise to jeho albumy

$json = file_get_contents('https://itunes.apple.com/search?term=vaso+patejdl&entity=album');
$json = json_decode($json);


$array = (array) $json;

echo '<pre>';
//print_r ( $json );
//print_r ( $array );
echo '</pre>';







// NAMIESTO TOHO SPOTIFY LINKU TAM TY POUZI ITUNES LINK, NAPR:
// https://itunes.apple.com/search?term=vaso+patejdl&entity=album
// https://itunes.apple.com/search?term=kanye+west&entity=album
// https://itunes.apple.com/search?term=kolowrat&entity=album



// pravda je, ze spotify sa medzitym zmenilo a toto uz nefunguje
// ale nechavam ten kod tu pre inspiraciu
// tvoja uloha bude
foreach ( $json->items as $album )
{


	$name = $album->name;
	$url  = $album->external_urls->spotify;


	echo '<p>';
	echo '	<a href="'. $url .'"><img src="'. $album->images[0]->url .'"></a>';
	echo '	<a href="'. $url .'">Vaso Patejdl - '. $name .'</a>';
	echo '</p>';
}
foreach ( $json as $key => $items )
foreach ( $items as  $item )
{
	
	$array = json_decode(json_encode($item), true);
	
	 echo '<pre>';
	//print_r($array);
	 echo '<pre>';
	
	
	$img = $array['artworkUrl100'];
	$url = $array['artistViewUrl'];
	$name = $array['collectionName'];
	echo '<pre>';
	//print_r($img);
	echo '<pre>';

	echo '<p>';
	echo '	<a href="'. $url .'"><img src="'. $img .'"></a>';
	echo '	<a href="'. $url .'">Vaso Patejdl - '. $name .'</a>';
	echo '</p>';
}


include_once '_inc/footer.php';