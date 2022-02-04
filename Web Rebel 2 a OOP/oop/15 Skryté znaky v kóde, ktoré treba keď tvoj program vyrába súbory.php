<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
     intiger cele čišla
     float desatinne čišla
  -->

  <?php  
    $item_count = 5 ;
    $item_price = 300 ;

    echo '<p>' .PHP_EOL;   // eol oddeli <p> so stirngim, string da na další riadok 
    echo 'I\'m firestarter, <strong>twisted</strong> firestarter. ';
    echo 'Punk detonator. ';
    echo '</p>';
    
    echo '<p>';
    echo "You boguht $item_count items for $item_price";
    echo 'Punk detonator. ';
    echo '</p>';

    /*
   \n	linefeed (LF or 0x0A (10) in ASCII)               // novy riadok keby boli na sebe html elementy 
  \r	carriage return (CR or 0x0D (13) in ASCII)      //
  \t	horizontal tab (HT or 0x09 (9) in ASCII)      //tabulator
  \v	vertical tab (VT or 0x0B (11) in ASCII)
  \e	escape (ESC or 0x1B (27) in ASCII)
  \f	form feed (FF or 0x0C (12) in ASCII)
  \\	backslash
  \$	dollar sign
  \"	double-quote
  \[0-7]{1,3}	the sequence of characters matching the regular expression is a character in octal notation, which silently overflows to fit in a byte (e.g. "\400" === "\000")
  \x[0-9A-Fa-f]{1,2}	the sequence of characters matching the regular expression is a character in hexadecimal notation
  \u{[0-9A-Fa-f]+}	the sequence of characters matching the regular expression is a Unicode codepoint, which will be output to the string as that codepoint's UTF-8 representation
  */

    
  ?>
    
</body>
</html>