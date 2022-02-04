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
            
            req.done(function(data){
                //console.log(data);
                if ( data === 'success' ) {

                    var li = $('<li class="list-group-item"><a href="edit.php" class"edit-link">edit</a>'+ input.val() +'</li>');

                   // li.hide()
                     //.appendTo('.list-group')
                     //.fadeIn();

                    li.appendTo('.list-group')   
                        .css({ backgroundColor: '#00bc8c'})
                        .delay(200)   // zastavi sa na chvilu
                        .animate({ backgroundColor:'#303030'});    
                        
                        // ked toto dame na začiatok uplne hore tak bude rovno blikať kurzor a možeme pisať po načitani stranky
                     input.val('').focus();  // vloži prazne nakonci zas a focus ho označi ako keby sme prave označili ho myšou 
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





}(jQuery));