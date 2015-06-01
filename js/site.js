$(function() {
	$('.profile-btn').on('click', function(e) { 
		e.stopPropagation(); 
	});
	
	$('.profile-btn').on('click', function(){
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.profile-nav').fadeOut(100);
		}

		else {
			$('.profile-nav').fadeIn(100);
			$(this).addClass('active');
		}
	});

	$('.icon-search').on('click', function(e) { 
		e.stopPropagation();
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.search').removeClass('show');
		}

		else {
			$(this).addClass('active');
			$('.search')
				.addClass('show')
				.children('input')
				.focus();

				closemobiMenu();
		}
	});

	$('.search').on('click', function(e) { 
		e.stopPropagation(); 
	});

	$('body').on('click', function(e) {
		$('.search').removeClass('show');
		$('.icon-search').removeClass('active');
		$('.profile-btn').removeClass('active');
		$('.profile-nav').fadeOut(100);
	});

	// mobi menu
	$('nav > ul > li').each(function() {
		$(this).find('.menu2-nav').children('li').each(function() {
			var $lvl3 = $(this).children('.mobi-lvl3');
			var	tabId = $(this).index() + 1;
			var $tabPane = $(this)
										.parents('li')
										.find('#tab' + tabId)
										.html();

			$lvl3.append($tabPane);

		});
	});

	$('.menu2-nav > li > a').on('click', function() {
		if ($(this).hasClass('activ-mobi')) {
			$('.menu2-nav > li > a').removeClass('activ-mobi');
			$('.menu2-nav > li > ul').removeClass('lvl3-show');
		}

		else {
			$('.menu2-nav > li > ul').removeClass('lvl3-show');
			$('.menu2-nav > li > a').removeClass('activ-mobi');
			$(this).addClass('activ-mobi');
			$(this).siblings('ul').addClass('lvl3-show');
		}
	});

	$('.menu-btn').on('click', function() {
		$('nav').addClass('nav-open');
		$(this).addClass('menu-btn-hide');
	});

	$('.icon-close-menu').on('click', function() {
		closemobiMenu();
	});

	function closemobiMenu() {
		$('nav').removeClass('nav-open');
		$('.menu-btn').removeClass('menu-btn-hide');
	}

	// mobi menu end
});