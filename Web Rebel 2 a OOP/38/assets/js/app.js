(function($){

    var form = $('#add-form');

    form.on('submit', function(event){
        event.preventDefault();
        
        var req = $.ajax({
            
            url: form.attr('action'),   // z indexu form atribut 
            type: 'POST',
            data: form.serialize()   //zoberie data zo vsetkych imputov a text areii
        });
        
        req.done(function(data){           //ked je request hotovy chcem spustit 
            console.log(data);
            
        });
        
    });

  //  form.fadeOut();

}(jQuery));