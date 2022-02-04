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
        forma = $('#edit-form'),
        list = $('#item-list'),
        input = form.find('#text'); // iba text ktory spada pod add form 

        input.val('').focus();
        $('.submit-button').hide()

        /** 
         * SETTINGS
        */
       var animation = {
           startColor: '#00bc8c',
           endColor: list.find('li').css('backgroundColor') || '#303030', // pozri do css a ak nie sprav farbu .. kvoli tomu aby nebol tmavy ak v css bude ina farba 
           delay: 200

       }


/*
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
*/


  

    var oriVal;
        $(document).on('dblclick', 'li', function () {


         var forma = $('#edit-form'),       
         oriVal = $(this).text(),
         oriVall = $(this).attr("id");
         //console.log(oriVall)


         var req = $.ajax({
            url: forma.attr('action'),      //form.attr('action'),
            type: 'POST',
            data:   form.serialize()  ,      //form.serialize() 'choice' + $('li'),
            dataType: 'html',
            //success: function (data) {
              //  console.log(data);                                 
               // }
        });

       /* req.done(function(data) {
            console.log (data);
        });*/

       // $(this).text("");
     $("<input id="+oriVall+" type='text'>").appendTo(this).focus();
    });

    $(document).on('focusout', 'li > input', function () {
        //req.done(function(data) {
       //     $.ajax({ url: baseURL }).done(function(html) {
            var $this = $(this),
                text =  $(this).parent().text($this.val() || oriVal) 
                text.replaceWith(text)


                 //   });
                    
               // });

                

    });


    /*
   //var oriVal;
        $(document).on('dblclick', 'li', function () {
         oriVal = $(this).text();
         oriVall = $(this).attr("id")
         console.log(oriVall)
       // $(this).text("");
     $("<input id="+oriVall+" type='text'>").appendTo(this).focus();
    });

    $(document).on('focusout', 'li > input', function () {
            var $this = $(this),
                text =  $(this).parent().text($this.val() || oriVal) 
                text.replaceWith(text)

    });
    
/*

    $(document).on('focusout', 'li > input', function () {
       var $this = $(this);

       

       $this.parent().text($this.val() || oriVal).appendTo( list ); // Use current or   original val.
       //$this.parent().text($this.val() || oriVal).appendTo( list ); // Use current or   original val.
      // $this.appendTo('li').focus();
     // $this.remove();  


*/



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


     /*
     $("document").ready(function () {
        var haveForm = false;
    
        $('li').dblclick(function () {
            var thisVal = $(this).html();
    
            if (!haveForm) {
                $('li').wrapAll('<form action="index.php" method="post" />');
                haveForm = true;
            }
            $(this).html('<input type="text" value="' + thisVal + '" name="name" />');
            
            
        });
        
    });
*/

/*

$(document).on('dblclick', 'li', function () {
    oriVal = $(this).text();
    $(this).text("");
    input = $("<input type='text'>");
   // input.appendTo('li').focus();

});
*/





}(jQuery));