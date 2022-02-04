    <title>php funnies</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container">
    
    <div class="page-header">
        <h1 class="text-muted">fun times php</h1>
    </div>

    <?php  



    $message = [
        'status' => 'success',
        'id' => 15
    ];

     $json = json_encode( $message);

    echo '<pre>';
    print_r($message);
    print_r($json);
    echo '</pre>';

    $message = json_decode ($json);  // ked dame true bude to ako  objekt ked vypiseme

    echo '<pre>';
    print_r($message);
    echo '</pre>';

    // k hodnotam objektu pristupujeme 
    echo $message->status.'<br>';
    echo $message->id.'<br>';
    
    
    
    // vytvorime object dame (sem) a vypise ako decode
    $message = (object)[
        'status' => 'success',
        'id' => 15
        ];
        
     // druhý sposob ako to dostiahnuť . velmi sa tento sposob neodporuča je pomalší ako aray a castnuť na object
     $obj = new stdClass;  
     $obj->who = 'Finn';   
     $obj->wat = 'Finn is a stilly kid who wants to become a great hero one day';   
     $obj->body = true;   
     
     // kedy pole kedy object ked potrebujem manilovat s koleciou že zmeniť kluče alebo to otočiť vysknuť kus tak polia
     // ak vytiahniť iba data o produkte a vypisať na stranku tak lepší by bol object lebo je krajší 
        
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
    ?>



</body>