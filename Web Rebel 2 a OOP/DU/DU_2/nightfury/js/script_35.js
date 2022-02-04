/*String.prototype.capitalize = function() {                   //doprogramovali sme metodu capitalize
return this.charAt(0).toUpperCase() + this.slice(1);  // pojde "gule".capitalize a vrati Gule
}*/


 (function($) {


	var gallery = $('.gallery'),
	startingOpacity = gallery.find('img').css('opacity');

	gallery.on('mouseenter mouseleave','img', function(event) {   	  /// aj tu upravéme ploštice	
	var opacity = event.type === 'mouseenter' ? 1 : startingOpacity;  
	$(this).stop().fadeTo(200, opacity);  
	});

	//--------------  

	var overlay = $('<div/>', { id: 'overlay'});
	overlay.appendTo('body').hide();                         // hide lebo by inak bol hned po refreshy na stranke nizsie je show sa zas ukaze

	gallery.on('click','a', function(event) {              //dopíšeme event a nizsie eventpreventdefault //upravime ploštice // ak na galery clik tak počuvam či dopadol na A element tak sa funckia spraví 
	
	var href = $(this).attr('href');                           // vytiahne hodnotu atributu možem si konzole lognuť var href = $(this).attr('href', 'gule'); v tedy sem pošle hodnutu 
		image = $('<img>', {src: href, alt: 'learn2code'}); 

		overlay.html (image)                                     // nahradi cele html 
			.show(); 

	event.preventDefault();
});
	overlay.on('click', function() {
		overlay.hide();

	});

	$(document).on('keyup', function(event){    //dam event 
		//console.log(event.which );             //vrati mi klavesu do konzoly
		if (event.which ===27 ) overlay.hide()
	});

	var gallery = $('gallery'),
	selected = $('.controls').find('.selected');

	$('.controls a').on('click', function(event)
	{
		
		//vyhtiahneme adresu linku
		var a = $(this),
			li =  a.parent(),
		 href = a.attr('href');

		 // ak chceme zobraziť zobrazečne, kašleme nato 
		 if (selected.is( li )) return;

		 //vyznacime noveho selected rodica
		 selected = li ;

		 //oznacime link na ktory sme klikli
		 li.addClass('selected')
  		 .siblings().removeClass('selected');
		
		//do elementu gallery nacitame obas stranky z toho linku ajax request
		 gallery.load(href + '.gallery-set')
		
		//nechcem ist na podstranku
		event.preventDefault();
	});

			

})(jQuery);


