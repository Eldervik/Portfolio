(function ($) {

	$(document).ready(function () {
		// This will be run when DOM has signaled that it has finished rendering all elements
		$('#wrapper-portfolio').on('click', function (e) {
			var $a = $(this).find('a');
			if ($a.length > 0) {
				window.location.href = $a.attr('href');
			}
		});
	});

})(jQuery); 