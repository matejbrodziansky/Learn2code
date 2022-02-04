(function($){

    /**
     * INPUT FORM
     */

    var form = $('#add-form'),
        //input = $('#text');
        input = form.find('#text'); // iba text ktory spada pod add form 

        input.val('').focus();

    form.on('submit', function(event){
        event.preventDefault();
        
        var req = $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize()
        });
            
            req.done(function(data) {
                if ( data === 'success' ) {
                    $.ajax({ url: '/todoapp' }).done(function(html) {
                        var newItem = $(html).find('li:last-child');
                        console.log( newItem[0] );

                       newItem.appendTo('.list-group')  
                         .css({ backgroundColor: '#00bc8c' })
                         .delay(200)   // zastavi sa na chvilu
                         .animate({ backgroundColor:'#303030' });    
                       
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