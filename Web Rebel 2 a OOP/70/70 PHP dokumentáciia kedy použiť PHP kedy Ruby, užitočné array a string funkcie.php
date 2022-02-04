    <?php  



     $adventure = [
		[
			'who' => 'Finn',
			'wat' => "Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there's evil around, he'll slay it. That's his deal."
		],
		[
			'who' => 'Jake',
			'wat' => "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn."
		],
		[
			'who' => 'Ice King',
			'wat' => "Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.",
			'inventory' => [ 'crown', 'beard', 'Gunther' ]
		],
		[
			'who' => 'PB',
			'wat' => "As a millionaire nerd enthusiast, Princess Bubblegum immerses herself in every branch of geekdom from rocket science to turtle farming."
		],
		[
			'who' => 'Marcy',
			'wat' => "Marceline is a wild rocker girl. Centuries of wandering the Land of Ooo have made her a fearless daredevil."
		],
	];
        // convert array na object // no v buducnosti bude nato funkcia čo s databazi  vytiahne ako objecty
        $adventure = json_encode ( json_encode ( $adventure ) );
        echo '<pre>';
        print_r($adventure);
        echo '</pre>';
        
    // sort(array); /*vs*/ asort(array) /*vd*/  natsort(array) ; // usporiadanie v dokumentaci možeme prečítať
    // arra_unique ( array ); // odfiltruje opakukjúce sa 
    // arra_silence ( array, offset ); // dovoli vystrihnuť z array
    // array_merge ( array1, array2 ); niekolko array do jedneho spojit
    // list();   
    // conmpact();
    // extract(); vytvaranie premmennych zhodnout arrayou alebo klúčov 
    // in_array( needle, haystack ); // ked  niekto uploadne subor tak si vytiahneme z neho priponu skontruluejeme ci sa nachadza tato pripona v našom zozname povolenych pripon 
    
    //array array_filter( array $array [, callable $callback [, int $flag = 0 ]]) // v zatvorke su veci ktore možeme do funkcie poslať  a v [su veci nepovinne ]
    //   vysledok funkcie bude array ktory možeme do premnnej chytiti
    //$arr = array_filter($arr); vytvori nove pole  a možeme si ho odchytit do premennej on vracia vysledok ako nove pole 
    
    //bool sort( array&$array [, int $sort_flags = SORT_REGULAR ] ) sympbol & ppresne s tym arrayom sa bude pracovať 
    
    //sort($arr)  ; chytí hodnoty a usporiada ich 
    //$arr = sort($arr)  ; do premmenej by uloťilo iba true alebo false a prideme o hodnoty ktore boli v arr

    // stringy 
        //trim( str );  //odsekne prazne znaky ale dás a speci aj ktore ake konce
        //strtolower( string); zcacsi alebo zmenší pismena  strtower($ext)== '.jpg' kontroluje hodnotu  JPG
        //strloupper( string );
        // str_replace ( search, replace, subject); // mozeme zmeniť kus tringu za iny napr medzery za pomlsky a tak 
        // strlen( string ); ako count pri array vrati dlzku stirngu 
        // subrstr ( string, start);    // hhtps//www.balls.hu  možeme iba balls 
        // strstr ( haystac, needle ); ako strpos podobne akurat pos vrati len čislo poziciu kde sa nachaca a ststr vrati aj tu čas stringu 
        // strpos ( haystack, needle ); // najsť nejaky substring podstring v stringu na akej pozici www.hovno.sk tak či tam je napriklad www (ak vrati cislo viac ako nula tak viem eže sa našlo )
        // strip_tags ( string ); vie odstraniť html značky zo stringu html 


  ?>



</body>