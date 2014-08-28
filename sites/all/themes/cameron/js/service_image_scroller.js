(function($) {
	var active = 0;
	var min = 0;
	var max = 0;
	var timer;

	$(function()
	{
		$("#prev-service").click(clickPrevious);
		$("#next-service").click(clickNext);

		max = rows().length;

		var $first = rows().eq(0).clone();
		var $second = rows().eq(1).clone();
		var $third = rows().eq(3).clone();
		
		rows().eq(1).addClass("active");

		container().append($first).append($second).append($third);
		start();
		setTimeout(layout, 50);
		$(window).resize(layout);
	});

	function start()
	{
		timer = setInterval(timerNext, 5000);
	}

	function container()
	{
		return $("#block-views-service-images-view-block .view-content");
	}
	function rows()
	{
		return container().find(".views-row");
	}

	function layout()
	{
		var numRows = rows().length;
		var containerWidth = numRows * rowWidth();
		var width = 1/numRows*100
		container().width(containerWidth+"%");
		rows().width(width+"%");
	}

	function moveContainer()
	{
		var left = "-" + (active*rowWidth()) + "%";
		container().stop(false, false).animate({"left":left});
		activeClass();
	}
	function jumpToEnd()
	{
		var active = rows().length-rowsPerPage();
		var left = "-" + (active*rowWidth()) + "%";
		container().css({"left":left});
	}
	function jumpToBeginning()
	{
		var active = min;
		var left = "-" + (active*rowWidth()) + "%";
		container().css({"left":left});
	}
	function activeClass()
	{
		var middle = 1;
		if (isMobile() || isTablet())
		{
			middle = 0;
		}
		rows().removeClass("active").eq(active+middle).addClass("active");
	}
	function rowWidth()
	{
		return 100/rowsPerPage();
	}
	function rowsPerPage()
	{
		if (isMobile())
		{
			return 1;
		}
		else if (isTablet())
		{
			return 2;
		}
		
		return 3;
	}
	function isMobile()
	{
		return $(window).width() < 540;
	}
	function isTablet()
	{
		return $(window).width() < 100;
	}

	function previous()
	{
		active--;
		if (active < min)
		{
			jumpToEnd();
			active = max-1;
		}
		moveContainer();
	}

	function next()
	{
		active++;
		if (active > max)
		{
			jumpToBeginning();
			active = min+1;
		}
		moveContainer();
	}

	function clickPrevious()
	{
		previous();
		stop();
		return false;
	}

	function clickNext()
	{
		next();
		stop();
		return false;
	}

	function stop()
	{
		clearInterval(timer);
	}

	function timerNext()
	{
		next();
		layout();
	}

}(jQuery));
