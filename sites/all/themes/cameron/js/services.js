(function($){
	$(function(){
		$(".read-more a").click(toggleReadMore);
		$(".read-less a").click(toggleReadMore);
		$("#block-views-list-view-block-body .service-title").click(toggleReadMore);
	 
	});

    function dis()
	{
        $(this).parents(".views-row").find(".read-more a").toggleClass("display");
        return false;
	}
	function toggleReadMore()
	{   
		$(this).parents(".views-row").toggleClass("read-more-open").find(".views-field-body").slideToggle();
		return false;
	}

	function replace()
	{   
		$(this).parents(".views-row").find(".read-less").css("display","block");
		return false;
	}
	function hide()
	{
		$(this).css("display","none");
		$(this).parents(".views-row").find(".views-field-body").slideUp();	
		$(this).parents(".views-row").find(".read-more a").css("display","block");
		return false;
	}
	
})(jQuery);
