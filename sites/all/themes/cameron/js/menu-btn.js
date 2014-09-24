(function($) {
	$(function(){
		$("#block-block-39 .content a").click(toggleMenu);
	});

	function toggleMenu()
	{
		$("#block-system-main-menu").slideToggle();
		return false;
	}
}(jQuery));