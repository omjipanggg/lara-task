$(document).ready(function() {
	$('#alert_timer').fadeTo(2750, 500).slideUp(500, function() {
		$('#alert_timer').slideUp(500);
	});
	var initialScrollPos = window.pageYOffset;
	$(window).scroll(function(){
		var scrollPos = $(this).scrollTop();
		if (initialScrollPos > scrollPos){
			$('#navigate').css('top', '0')
		} else {
			$('#navigate').css('top', '-' + scrollPos + 'px')
		}
		initialScrollPos = scrollPos;
		var winHeight = $(this).height();
		var docHeight = $(document).height();
		var scrollPercentage = 100 * scrollPos / (docHeight - winHeight);
		if (winHeight+scrollPos > (docHeight-5)) {
		// REACHED THE BOTTOM OF THE DOCUMENT
		}
		$('#moving').css('width', (scrollPercentage) + '%');
	});
	$('.prevented').click(function(e) {
		e.preventDefault();
		$(this).prev().submit();
	});
	$('.del>input[type="checkbox"]').change(function() {
		$(this).parents('tr').find('.task-name').toggleClass('striked');
		$(this).val(this.checked ? "True": "False");
		$(this).prev().submit();
	});
});