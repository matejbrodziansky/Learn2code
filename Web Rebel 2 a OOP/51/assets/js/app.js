(function($){

  /*  var data = {
        "status": "succes",
        "id": 15
    };

    console.log(data.status);
    console.log(data.id);
    */



    /**
     * INSERT FORM
     */

    var form = $('#add-form'),
        list = $('#item-list'),
        input = form.find('#text'); // iba text ktory spada pod add form 

        input.val('').focus();

        /** 
         * SETTINGS
        */
       var animation = {
           startColor: '#00bc8c',
           endColor: list.find('li').css('backgroundColor') || '#303030', // pozri do css a ak nie sprav farbu .. kvoli tomu aby nebol tmavy ak v css bude ina farba 
           delay: 200

       }



    form.on('submit', function(event){
        event.preventDefault();
        
        var req = $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            dataType: 'json'
        });
            
        req.done(function(data) {
			if ( data.status === 'success' ) {
				$.ajax({ url: baseURL }).done(function(html) {
				//	var newItem = $(html).find('#item-' + data.id); // nejde
					var newItem = $(html).find('li:last-child');

					newItem.appendTo( list )
						.css({ backgroundColor: animation.startColor })
						.delay( animation.delay )
						.animate({ backgroundColor: animation.endColor });

					input.val('').focus();
                       
                    }); 
                }
            });
        });
    
            input.on('keypress', function(event) {
                if (event.which === 13 ) {
                    form.submit();
                    return false;  // nepripise enter na koniec 
                }
            

    });

     /**
     * EDIT FORM
     */
     $('#edit-form').find('#text').select();




     /**
     * DELETE FORM
     */

     $('#delete-form').on('submit', function(event){
        return confirm('forsure?');    // potrvrdíme ci chceš vymazať

     });




}(jQuery));