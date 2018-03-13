	<a href="#homecont" class="cd-top"></a>

		<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
			$('a[href*="#ABOUT"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 700, 'linear');
			});    	

			$('a[href*="#GUIDELINES"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 800, 'linear');
			});    	

			$('a[href*="#FORMS"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 900, 'linear');
			});    	

			$('a[href*="#CONNECT"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 1000, 'linear');
			});    	

			$('a[href*="#SPONSORS"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 1000, 'linear');
			});    	


			$('a[href*="#VENUE"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 1200, 'linear');
			});    	

    </script>

    <script>
      function initMap() {
        var coords = {lat: 14.637293, lng: 121.030462};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,mapTypeId: 'hybrid',
          center: coords
        });
        var marker = new google.maps.Marker({
          position: coords,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOuFLE0t1EGju1wDKNTgSqAip4hHCyAow&callback=initMap">
    </script>        


    <script>document.body.className += ' fade-out';</script>

		<script type="text/javascript">
$(function() {
    $('body').removeClass('fade-out');
});

			$('body').toggleClass('loaded');
			jQuery(document).ready(function($){
				var offset = 100,
					offset_opacity = 1200,
					scroll_top_duration = 700,
					$back_to_top = $('.cd-top');

				$(window).scroll(function(){
					( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
					if( $(this).scrollTop() > offset_opacity ) { 
						$back_to_top.addClass('cd-fade-out');
					}
				});

				$back_to_top.on('click', function(event){
					event.preventDefault();
					$('body,html').animate({
						scrollTop: 0 ,
					 	}, scroll_top_duration
					);
				});

			});
		</script>
  </body>
</html>