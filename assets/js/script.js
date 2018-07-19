$(document).ready(function(){
		var toggle = $(".btn-toggle");
		toggle.on("click",function(){
			$("nav").toggleClass("js-nav");
			$(this).toggleClass("js-tog-nav");
		});

		var sideTog = $(".tog-side");
		sideTog.on("click",function(){
			$("aside").toggleClass("js-aside-tog");
			$(this).toggleClass("js-tog-side");
		});

		$("a[href='#top']").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		});

		/* var side = $("aside");
		var win = $(window);
		var header = $("header").height();
		var nav = $("nav").height();
		var content = $(".content-section");
		win.scroll(function(){
			if(win.scrollTop() > header + nav){
				side.addClass("js-aside");
			}else{
				side.removeClass("js-aside");
			}
		}); */

		var side = $("aside");
		var win = $(window);
		var header = $("header").height();
		var nav = $("nav").height();
		var content = $(".content-section").height();
		win.scroll(function(){
			if(win.scrollTop() > header + nav){
				side.addClass("js-aside");
			}else{
				side.removeClass("js-aside");
			}
		});

	});