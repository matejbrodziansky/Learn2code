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

    var form = $('.list-group-item'),
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



    form.on('dbclick', function(event){
       // event.preventDefault();
        
        var req = $.ajax({
            url: form,
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












 /*   

    // Selecting the table <th> odd elements
$("li").dblclick(function(e){
    e.stopPropagation(); 
    var currentEle = $(this);
    var value = $(this).html();
    updateVal(currentEle, value);
});

function updateVal(currentEle, value)
{
    $(currentEle).html('<input class="liVal" type="text" value="'+value+'" />');
    $("li").focus();
    $("lis").keyup(function(event){
        if(event.keyCode == 13){
            $(currentEle).html($("li").val().trim());
        }
    });

    $('body').not("li").click(function(){
        if(('li').length != 0)
        {
            $(currentEle).html($("li").val().trim());
        }
    });
}

*/

/*
    var updateItem = $('li');

    //var oriVal;
        $(document).on('dblclick', 'li', function () {
         oriVal = $(this).text();
        $(this).text("");
     $("<input type='text'>").appendTo(this).focus();
    });

    $(document).on('focusout', 'li > input', function () {
       var $this = $(this);
       $this.parent().text($this.val() || oriVal).appendTo( list ); // Use current or   original val.
      // $this.appendTo('li').focus();
      $this.remove();                      // Don't just hide, remove  the element.
});
    
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