<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php  





$adventute = [

   [      
     'who' => 'Finn',
     'wat' => "Finn je mrdka ",
     'comments' => 4,
   ],

    [      
     'who' => 'Jake',
     'wat' => "The fukcing awesome dog ",
     'comments' => 23,
   ],

    [      
     'who' => 'Mates',
     'wat' => "The bad programmer ",
     'inventory' => [ 'Mackbook', 'Windows'],
     'comments' => 10,

   ],

    [      
     'who' => 'Prd',
     'wat' => "He is fart loudly ",
     'comments' => 44,
   ],

    [      
     'who' => 'Jackie',
     'wat' => "The smallest dog ",
     'comments' => 10,
   ],
];


  // sort( array ) /*vs*/ asort( $array ) /*vs*/ natsord( $array );  sort zotriedi položky abecedne , asort taktiež ale kluče necha ako boli , natural sort ako človek by sortoval pojde 1 2 3 a nie 1 10 2 
  // array_unique( array);  ked sa opakuju ofiltruje opakujuce
  // array_slice( array, offset ); dovoli vystrihnuť kusaray 
  // array_merge( array); niekolko aray spojiť do jedneho 
  // list()    jednoduche vytvaranie premennych z array alebo ich klučov
  // compact()
  // extract()
  // in_array( needle, haystack);   možeme vytvoriť array povolenych pripon suboru  a ked niekto uploadne novy vytiahneme priponu a skontrulujeme či sa tato pripona nachadza v našom zozname povolenych pripon 

  //array array_filter( array$array[,callable$callback[, int$flag = 0]]) vyledok je array , spracuje hodnoty ktore poslšme a vytvori z nich array ktory si možeme odychytiť to premennej 
  //                    hodnoty ktore niesu [] tam musime poslať 
  // array_filter vraci ako vysledok nove pole 
  // sort vracia boolimn hodnotu podla toho či sa mu podarilo $arr = sort($arr) vrati len true alebo false 

  // trim( str); odsekne whitespaces 
  // strtolower(string);  zvacsi alebo zmensi pismena 
  // strtoupper (string);  --||--  
  // str_replace( search, replace, subject); možeme zmeniť kus stirngu za iny napriklad meddzery za podčiarniky interpukciu za neinterpukciu 
  // strlen( string);  ako count pri array vrati dlžku stringu , keby chcem kus stringu napr len .balls.eu bez http
  // subrstr ( string, start);   vie vratiť aj tu čas tringu ako nizsie 
  // strstr( haystack, needle); podobne ako nizzsie ale vrati iba poziciu čislo indexu 
  // strpos( haystack, needle);  ked chceme najsť nejaky sub string podstring kde na akej pozicii sa nachadza  ci sa nachadza www napriklad 
  // strip_tags( string);    vie odstraniť html značky 

?>


 <!-- 


   -->
    
</body>
</html>