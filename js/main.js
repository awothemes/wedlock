// Gumby is ready to go
Gumby.ready(function() {
	// skip link and toggle on one element
	// when the skip link completes, trigger the switch
	(function($) { ('#skip-switch').on('gumby.onComplete', function() {
		$(this).trigger('gumby.trigger');
	});
	});
})
