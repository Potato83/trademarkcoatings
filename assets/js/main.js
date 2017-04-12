// Toggle Menu

$(function(){
	var $window = $(window);
	var $top_bar = $('#toggle-menu');
	var height = $window.height() - 100;
	$window.scroll(function(){
		var wt = $window.scrollTop();
		if( wt > height){
			$top_bar.removeClass('sneaky').fadeIn(1500, "swing");
			//
		} else if (wt < height) {
			$top_bar.fadeOut(500, "swing");
		}

	});
});

// Product Tabs

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

$('.link-scroll a').on('click', function(e){

		// alert($(this).attr('href').substr(1));
		scrollToSection( $(this).attr('href').substr(1) );
		
		return false;
	})

function scrollToSection( section_name ){
	var scroll_to = $('a.anchor[name="'+section_name+'"]').offset().top;
	$('html, body').animate({ scrollTop: scroll_to }, 2000, function(){
		window.location.hash = section_name;
		// alert(scroll_to);

		// fix for ios scrolling and fixed position
		//$('#autoscrollfix').height(100);
		//setTimeout( function(){
		//	$('#autoscrollfix').height(0);
		//}, 1);
	} );
}