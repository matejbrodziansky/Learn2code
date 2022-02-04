String.prototype.capitalize = function() {                   //doprogramovali sme metodu capitalize
return this.charAt(0).toUpperCase() + this.slice(1);  // pojde "gule".capitalize a vrati Gule
}


;(function($) {



				/*
				* GALERIA
				*/

		
				var galleries = $('.gallery-set');
				galleries.hide();
	
				var selected = $('.controls').find('.selected');
		
					function showGallery( selected, fadeClass ) {
						//ak má nejaku dlžku 	
						if (selected.length) {
							var id = selected.find('a').attr('href');
							//vyberie element s id cely
							selectedGallery = $(id);
							
						}		

						                 // ak galeria neexistuje zobrazime prvy, inak zobrazime existujucu
						var newGallery = selectedGallery.length ? selectedGallery : galleries.eq(0);

							galleries.not(newGallery).hide();
						
							newGallery.show().addClass( fadeClass || 'fadeInLeft' ); //ak niekto nedá data l r do html tak aspon toto 

					}

					// zobraz selected galeriu
					showGallery(selected);

					$('.controls a'). on('click', function(){
						var li = $(this).parent(),
							fadeClass = 'fadeIn'+ li.data('from').capitalize();
							console.log(fadeClass)

					
						//	"vajca".charAt(0).toUpperCase() + "vajcia".slice(1);
						
						li.addClass('selected')
						.siblings().removeClass('selected');

						showGallery( li, fadeClass );

						event.preventDefault();
					});
			

})(jQuery);  



/*
String.prototype.capitalize = function {                   //doprogramovali sme metodu capitalize
	return this.charAt(0).toUpperCase() + this.slice(1);  // pojde "gule".capitalize a vrati Gule
}

function capitalize(str) {
	return str.charAt(0).toUpperCase() + str.slice(1);  // funkcia capitalize('gule'); vrati Gule
}


*/


