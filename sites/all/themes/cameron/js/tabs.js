(function($) {
	var $tabs;
	$(function(){
		var $body = $("body");
		$tabs = $("#main-wrapper ul.tabs.primary");

		if ($body.hasClass("logged-in"))
		{
			if ($body.hasClass("page-node-1"))
			{
				emptyTabs();
			}
			else if ($body.hasClass("page-node-5"))
			{
				emptyTabs();
				$tabs.append("<li><a href='/node/add/gallery'>Add Photo Gallery</a></li>");
			}
			else if ($body.hasClass("page-node-17"))
			{
				emptyTabs();
				$tabs.append("<li><a href='/node/add/team-member'>Add Team Member</a></li>");
			}
			else if ($body.hasClass("page-node-63"))
			{
				emptyTabs();
			}
			else if ($body.hasClass("page-node-7"))
			{
				emptyTabs();
			}
		}
	});

	function emptyTabs()
	{
		$tabs.empty();
	}
}(jQuery));
