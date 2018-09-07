jQuery(document).ready(function(){
	/*
		convert a cubic bezier value to a custom mina easing
		http://stackoverflow.com/questions/25265197/how-to-convert-a-cubic-bezier-value-to-a-custom-mina-easing-snap-svg
	*/
	var duration = 300,
		delay = 300,
		autoPlayDelay = 5000,
		epsilon = (1000 / 60 / duration) / 4,
		firstCustomMinaAnimation = bezier(.42,.03,.77,.63, epsilon),
		secondCustomMinaAnimation = bezier(.27,.5,.6,.99, epsilon);

	//initialize the slider
	$('.cd-slider-wrapper').each(function(){
		initSlider($(this));
	});

	function initSlider(sliderWrapper) {
		//cache jQuery objects
		var slider = sliderWrapper.find('.cd-slider'),
			sliderNavigation = sliderWrapper.find('.cd-slider-navigation').find('li'),
			sliderControls = sliderWrapper.find('.cd-slider-controls').find('li'),
			svgCoverLayer = sliderWrapper.find('div.cd-svg-cover'),
			pathId = svgCoverLayer.find('path').attr('id'),
			svgPath = Snap('#'+pathId);

		//store path 'd' attribute values
		var pathArray = [];
		pathArray[0] = svgCoverLayer.data('step1');
		pathArray[1] = svgCoverLayer.data('step6');
		pathArray[2] = svgCoverLayer.data('step2');
		pathArray[3] = svgCoverLayer.data('step7');
		pathArray[4] = svgCoverLayer.data('step3');
		pathArray[5] = svgCoverLayer.data('step8');
		pathArray[6] = svgCoverLayer.data('step4');
		pathArray[7] = svgCoverLayer.data('step9');
		pathArray[8] = svgCoverLayer.data('step5');
		pathArray[9] = svgCoverLayer.data('step10');

		//update visible slide when user clicks .cd-slider-navigation buttons
		sliderControls.on('click', function(event){
			event.preventDefault();
			var selectedItem = $(this);
			if(!selectedItem.hasClass('selected')) {
				// if it's not already selected
				var selectedSlidePosition = selectedItem.index(),
					selectedSlide = slider.children('li').eq(selectedSlidePosition),
					visibleSlide = slider.find('.visible'),
					visibleSlidePosition = visibleSlide.index(),
					direction = '';
				direction = ( visibleSlidePosition < selectedSlidePosition) ? 'next': 'prev';
				updateSlide(visibleSlide, selectedSlide, direction, sliderControls, svgCoverLayer, pathArray, svgPath);
			}
		});

		//update visible slide when user clicks .cd-slider-navigation buttons
		$('.cd-slider-navigation li.prev').on('click', function(event){
			prevSlide(slider, sliderControls, svgCoverLayer, pathArray, svgPath);
		});

		$('.cd-slider-navigation li.next').on('click', function(event){
			nextSlide(slider, sliderControls, svgCoverLayer, pathArray, svgPath);
		})

		slider.on('swipeleft', function(event){
			nextSlide(slider, sliderControls, svgCoverLayer, pathArray, svgPath);
		});
		slider.on('swiperight', function(event){
			prevSlide(slider, sliderControls, svgCoverLayer, pathArray, svgPath);
		});

		setInterval(function(event) {
			if(autoPlayDelay > 0) {
				autoPlayDelay = autoPlayDelay - 1000;
			}
			else if(autoPlayDelay == 0) {
				nextSlide(slider, sliderControls, svgCoverLayer, pathArray, svgPath);
				autoPlayDelay = 5000;
			}
			// console.log(autoPlayDelay);
  		}, 1000);
	}

	function retrieveVisibleSlide(slider, sliderControls, pathArray) {
		return slider.find('.visible');
	}

	function nextSlide(slider, sliderControls, svgCoverLayer, paths, svgPath) {
		var visibleSlide = retrieveVisibleSlide(slider),
			nextSlide = ( visibleSlide.next('li').length > 0 ) ? visibleSlide.next('li') : slider.find('li').eq(0);
		updateSlide(visibleSlide, nextSlide, 'next', sliderControls, svgCoverLayer, paths, svgPath);
		// autoPlayDelay = 5000;
	}
	function prevSlide(slider, sliderControls, svgCoverLayer, paths, svgPath) {
		var visibleSlide = retrieveVisibleSlide(slider),
			prevSlide = ( visibleSlide.prev('li').length > 0 ) ? visibleSlide.prev('li') : slider.find('li').last();
		updateSlide(visibleSlide, prevSlide, 'prev', sliderControls, svgCoverLayer, paths, svgPath);
		// autoPlayDelay = 5000;
	}

	// function updateSlide(oldSlide, newSlide, direction, controls, paths) {
	function updateSlide(oldSlide, newSlide, direction, sliderControls, svgCoverLayer, paths, svgPath) {
		if( direction == 'next' ) {
			var path1 = paths[0],
				path2 = paths[2],
				path3 = paths[4];
				path4 = paths[6];
				path5 = paths[8];
		} else {
			var path1 = paths[1],
				path2 = paths[3],
				path3 = paths[5];
				path4 = paths[7];
				path5 = paths[9];
		}

		svgCoverLayer.addClass('is-animating');
		svgPath.attr('d', path1);
		svgPath.animate({'d': path2}, duration, firstCustomMinaAnimation, function(){
			svgPath.animate({'d': path3}, duration, secondCustomMinaAnimation, function(){
				oldSlide.removeClass('visible');
				newSlide.addClass('visible');
				updateNavSlide(newSlide, sliderControls);
				setTimeout(function(){
					svgPath.animate({'d': path4}, duration, firstCustomMinaAnimation, function(){
						svgPath.animate({'d': path5}, duration, secondCustomMinaAnimation, function(){
							svgCoverLayer.removeClass('is-animating');
						});
					});
				}, delay);
			});
		});
		autoPlayDelay = 5000;
	}

	function updateNavSlide(actualSlide, sliderControls) {
		var position = actualSlide.index();
		sliderControls.removeClass('selected').eq(position).addClass('selected');
	}

	function bezier(x1, y1, x2, y2, epsilon){
		//https://github.com/arian/cubic-bezier
		var curveX = function(t){
			var v = 1 - t;
			return 3 * v * v * t * x1 + 3 * v * t * t * x2 + t * t * t;
		};

		var curveY = function(t){
			var v = 1 - t;
			return 3 * v * v * t * y1 + 3 * v * t * t * y2 + t * t * t;
		};

		var derivativeCurveX = function(t){
			var v = 1 - t;
			return 3 * (2 * (t - 1) * t + v * v) * x1 + 3 * (- t * t * t + 2 * v * t) * x2;
		};

		return function(t){

			var x = t, t0, t1, t2, x2, d2, i;

			// First try a few iterations of Newton's method -- normally very fast.
			for (t2 = x, i = 0; i < 8; i++){
				x2 = curveX(t2) - x;
				if (Math.abs(x2) < epsilon) return curveY(t2);
				d2 = derivativeCurveX(t2);
				if (Math.abs(d2) < 1e-6) break;
				t2 = t2 - x2 / d2;
			}

			t0 = 0, t1 = 1, t2 = x;

			if (t2 < t0) return curveY(t0);
			if (t2 > t1) return curveY(t1);

			// Fallback to the bisection method for reliability.
			while (t0 < t1){
				x2 = curveX(t2);
				if (Math.abs(x2 - x) < epsilon) return curveY(t2);
				if (x > x2) t0 = t2;
				else t1 = t2;
				t2 = (t1 - t0) * .5 + t0;
			}

			// Failure
			return curveY(t2);

		};
	};

	// scrollspy mobile navigation
	if ($(window).width() < 768) {
	   $('body').scrollspy({
		   target: '#navigation-mobile-menu',
		   offset: 48
	   });
	}
});

/****************************************/
/*          NAVIGATION MOBILE           */
/****************************************/

$('#navigation-mobile-menu ul.navigation-mobile-menu-list li a').on('click', function(event) {
	event.preventDefault();
	$('#navigation-mobile-menu').removeClass('active');

	if (this.hash !== "") {
     	// Store hash
      	var hash = this.hash;

      	// Using jQuery's animate() method to add smooth page scroll
      	// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      	$('html, body').animate({
        	scrollTop: $(hash).offset().top - 48
      	}, 800);
    }
});

/****************************************/
/*        NAVIGATION MOBILE END         */
/****************************************/

/*****************************************/
/*        FIND MY NEEDS SLIDER          */
/*****************************************/
var findMyNeedsSlider;

function initFindMyNeedsSlider() {
	findMyNeedsSlider = tns({
		container: '.find-my-needs-slider',
		autoplay: false,
		items: 1,
		mouseDrag: false,
		autoplayButtonOutput: false,
		controls: false,
		nav: false,
		loop: false,
		gutter: 10,
		onInit: function (info) {
			document.querySelector('.slider-number-current').textContent = info.index + 1;

			if(info.slideCount <= 5) {
				document.querySelector('.slider-number-total').textContent = info.slideCount;
			}
			else {
				document.querySelector('.slider-number-total').textContent = '5';
			}
		}
	});

	findMyNeedsSlider.events.on('indexChanged', function() {
		if(findMyNeedsSlider.getInfo().index + 1 <= 5) {
			document.querySelector('.slider-number-current').textContent = findMyNeedsSlider.getInfo().index + 1;
		}
		else {
			document.querySelector('.slider-number-current').textContent = '5';
		}

		if(findMyNeedsSlider.getInfo().slideCount <= 5 ) {
			document.querySelector('.slider-number-total').textContent = findMyNeedsSlider.getInfo().slideCount;
		}
		else {
			document.querySelector('.slider-number-total').textContent = '5';
		}
	});
}

$('#find-my-needs-modal').on('shown.bs.modal', function (e) {
	setTimeout(initFindMyNeedsSlider(), 1000)
});

$('#find-my-needs-modal').on('hidden.bs.modal', function () {
	findMyNeedsSlider.destroy();
});

$('.find-my-needs-next').on('click', function () {
	findMyNeedsSlider.goTo('next');
});

$('.find-my-needs-prev').on('click', function () {
	findMyNeedsSlider.goTo('prev');
});

$('#find-my-needs-final').on('click', function () {
	$('#find-my-needs-modal').modal('hide');
	$('#thank-you-modal').modal('show');
});
/*****************************************/
/*       FIND MY NEEDS SLIDER END        */
/*****************************************/


/*****************************************/
/*         TOGGLE MENU IN HEADER         */
/*****************************************/
$('#header .section-content button.btn-custom').on('click', function(event) {
	var target = $(this).data('target');
	$(target).toggleClass('active');
});

$(document).on('click', function(event) {
	if (!$(event.target).closest('.side-menu').length && !$(event.target).closest('#header .section-content button.btn-custom').length) {
		$('.side-menu').removeClass('active');
	}
});
/****************************************/
/*       TOGGLE MENU IN HEADER END      */
/****************************************/

/****************************************/
/*      PREVIOUS WORKS MODAL EVENT      */
/****************************************/

var previousWorksSlider = [];
var previousWorksSliderTarget = '';

$('#previous-works-modal').on('hidden.bs.modal', function () {
	destroyCarousel();
});


$('ul#previous-works-slide li button.btn-custom').on('click', function() {
	previousWorksSliderTarget = $(this).data('target');
	$('#previous-works-modal').modal('toggle');
	$('#previous-works-modal #previous-works-modal-mobile-navigation a[href='+ previousWorksSliderTarget +']').tab('show');
});

$('#previous-works-modal .popup-navigation-to-drag[data-toggle="tab"], #previous-works-modal #previous-works-modal-mobile-navigation > li > a[data-toggle="tab"]').on('show.bs.tab', function (e) {
	destroyCarousel();
});

$('#previous-works-modal .popup-navigation-to-drag[data-toggle="tab"], #previous-works-modal #previous-works-modal-mobile-navigation > li > a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	console.log('onshown');
	createCarousel();
});

function createCarousel() {
	var activeTabs = document.querySelector('#previous-works-modal .tab-pane.fade.in.active');
	var carousel = activeTabs.querySelectorAll('.modal-carousel');


	for(var i = 0; i < carousel.length; i++) {
		var slider = tns({
			container: carousel[i],
			autoplay: false,
			items: 1,
			mouseDrag: true,
			autoplayButtonOutput: false,
			controls: false,
			nav: true,
			swipeAngle: 60,
		});
		previousWorksSlider.push(slider);
	}
}

function destroyCarousel() {
	if(previousWorksSlider.length > 0) {
		for(var i = 0; i < previousWorksSlider.length; i++) {
			previousWorksSlider[i].destroy();
		}
		previousWorksSlider = [];
	}
	console.log('destroy');
}

$('#previous-works-modal .popup-button-wrapper button.btn-custom').on('click', function(e) {
	var target = $(this).data('target');
	$('#previous-works-modal-mobile-navigation a[href='+ target +']').tab('show');
});

/****************************************/
/*    PREVIOUS WORKS MODAL EVENT END    */
/****************************************/

/****************************************/
/*   OPEN OTHER TABS FROM BUTTON CLICK  */
/****************************************/

// $('.popup-button-wrapper button').on('click', function(){
// 	console.log(this);
// });

// $('#about-us-modal .popup-button-wrapper button.btn-custom').on('click', function(e) {
// 	var target = $(this).data('target');
// 	$('#about-us-modal-mobile-navigation a[href='+ target +']').tab('show');
// });

/****************************************/
/* OPEN OTHER TABS FROM BUTTON CLICK END*/
/****************************************/

/****************************************/
/*      SELECT OPTION ON WINDOW LOAD    */
/****************************************/

function homeClick() {
	$('#button-b2b-initial').click(function() {
		$('.b2b-choice-option').removeClass('hidden');
	});

	$('.close-modal-slide').click(function() {
		$(this).parent().removeClass('active');
	});

	$('.find-my-needs-image-1').click(function() {
		$('.find-my-needs-image-1').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-2').click(function() {
		$('.find-my-needs-image-2').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-3').click(function() {
		$('.find-my-needs-image-3').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-4').click(function() {
		$('.find-my-needs-image-4').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-5-1').click(function() {
		$('.find-my-needs-image-5-1').removeClass('selected');
		console.log('ke 1');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-5-2').click(function() {
		$('.find-my-needs-image-5-2').removeClass('selected');
		console.log('ke 2');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-5-3').click(function() {
		$('.find-my-needs-image-5-3').removeClass('selected');
		$(this).addClass('selected');
	});

	$('.find-my-needs-image-5-4').click(function() {
		$('.find-my-needs-image-5-4').removeClass('selected');
		$(this).addClass('selected');
	});
}

function selectPeople(type) {
	$('.header-bg').addClass('hidden');
	$('.header-type-bg').addClass('hidden');

	$('.'+ type).removeClass('hidden');
	$('#'+ type +'-header-content').removeClass('hidden');

	$('#initial-modal').modal('hide');
}

/****************************************/
/*   SELECT OPTION ON WINDOW LOAD END   */
/****************************************/

/****************************************/
/*              DRAGGABLE               */
/****************************************/
// Draggable.create(".popup-navigation-to-drag", {
// 	type:"x",
// 	edgeResistance:0.65,
// 	bounds:".popup-navigation-lane-container"
// });


$('#about-us-modal, #previous-works-modal, #services-modal').on('shown.bs.modal', function (e) {
	var laneContainer = this.querySelectorAll('.popup-navigation-lane-container');
	for(var i = 0;i<laneContainer.length;i++) {
		var toDrag = laneContainer[i].querySelector('.popup-navigation-to-drag');
		var draggable = Draggable.create(toDrag,
		{
			type:"x",
			edgeResistance:1,
			bounds:laneContainer[i],
			onClick: function(){
		        e.preventDefault();
		    },
			onDrag: function() {
				onDrag(this);
			},
			onDragEnd:function() {
                openTab(this);
            }
		})[0];

		draggable.addEventListener("dragstart", startDrag);
		// draggable.addEventListener("drag", onDrag);

		function startDrag() {
			this.classList.add('dragged');
		}

		function onDrag(element) {
			var currentX = Math.round((element.x + 0.00001) * 100) / 100;
			var maxX = Math.round((element.maxX + 0.00001) * 100) / 100;

			console.log(currentX);

			if (currentX >= maxX) {
				console.log(element.target);
				$(element.target).next().next().addClass('invisible');
			}
			else {
				$(element.target).next().next().removeClass('invisible');
			}
		}

		function openTab(element) {
			var currentX = Math.round((element.x + 0.00001) * 100) / 100;
			var maxX = Math.round((element.maxX + 0.00001) * 100) / 100;

			// kalau draggable sudah sampai diujung,
			if (maxX == currentX) {
				var target = element.target;
				$(target).tab('show');
				console.log('kali');

				// SALAH DISINI NIH, MUSTINYA SEKALI MALAH BERKALI2
				$('.popup-navigation-lane-container .popup-navigation-to-drag').on('shown.bs.tab', function (e) {
				// $('#about-us-modal .popup-content .tab-content').on('shown.bs.tab', function (e) {
					// console.log(e.target);
					// console.log(element);
					resetPosition(element.target);
			  	});
			}
		}

		function resetPosition(element) {
			// console.log(element.getAttribute('data-target'));
			// var a = element.getAttribute('data-target');
			// if(!$(a).hasClass('active')) {
				for(var i = 0;i<laneContainer.length;i++) {
					TweenLite.to(laneContainer[i].querySelector('.popup-navigation-to-drag'), 1, {
						x:'0',
						onComplete: function() {
							this.target.classList.remove('dragged');
							$(this.target).next().next().removeClass('invisible');
						}
					});
				}
			// }

			// console.log('asdasdasd ' + a);

			// console.log(element.target.getAttribute('data-target'));
		}
	}
});

/****************************************/
/*           DRAGGABLE END              */
/****************************************/

/****************************************/
/*    NEWS AND GALLERY MODAL SLIDER     */
/****************************************/

var newsAndGallerySlider;

$('#news-and-gallery-modal').on('shown.bs.modal', function (e) {
	initNewsAndGallerySlider();
});

function initNewsAndGallerySlider() {
	var test = document.documentElement.clientWidth;
	if (test > 767) {
		newsAndGallerySlider = tns({
	        container: '.news-and-gallery-modal-carousel',
	        items: 4,
	        mouseDrag: true,
	        swipeAngle: false,
	        arrowKeys: true,
	        autoplay: false,
	        axis: "vertical",
	        loop: true,
	        nav: false,
	        gutter: 10,
	        controlsText: [" <img src='http://localhost/aidan/assets/images/main/arrow-left.png'> ", " <img src='http://localhost/aidan/assets/images/main/arrow-right.png'> "],
			responsive: {
				1080: {
			    	gutter: 10,
			    },
				1380: {
			    	gutter: 10,
			    },
				1480: {
			    	gutter: 13,
			    },
				1680: {
					gutter: 15,
				}
			},
	    });
	}
	else {
		newsAndGallerySlider = tns({
	        container: '.news-and-gallery-modal-carousel',
	        items: 3,
	        mouseDrag: true,
	        swipeAngle: false,
	        arrowKeys: true,
	        autoplay: false,
	        axis: "horizontal",
	        loop: true,
	        nav: false,
	        gutter: 10,
	        controlsText: [" <img src='http://localhost/aidan/assets/images/main/arrow-left.png'> ", " <img src='http://localhost/aidan/assets/images/main/arrow-right.png'> "],
			responsive: {
				1080: {
			    	gutter: 10,
			    },
				1380: {
			    	gutter: 10,
			    },
				1480: {
			    	gutter: 13,
			    },
				1680: {
					gutter: 15,
				}
			},
	    });
	}
}

$('#news-and-gallery-modal').on('hidden.bs.modal', function () {
	console.log('destroy');
	newsAndGallerySlider.destroy();
});

$('.news-and-gallery-modal-carousel .thumbnail').on('click', function() {
	$('.news-and-gallery-modal-carousel .thumbnail').removeClass('active');
	$(this).addClass('active');
	var image = $(this).data('image');
	$('.news-and-gallery-modal-main-thumbnail .content-inside').css('background-image', 'url('+ image +')');
});

/****************************************/
/*   NEWS AND GALLERY MODAL SLIDER END  */
/****************************************/

/****************************************/
/*   OPEN CERTAIN TABS ON MODAL OPEN    */
/****************************************/

// section about us
var aboutUsTabsButtons = document.querySelectorAll('#about-us .tab-content .tab-pane button.btn-custom');

for(var i = 0; i < aboutUsTabsButtons.length; i++) {
	aboutUsTabsButtons[i].addEventListener('click', function() {
		var aboutUsTabsTarget = this.getAttribute('data-target');
		$('#about-us-modal').modal('toggle');
		$('#about-us-modal #about-us-modal-mobile-navigation a[data-target="'+ aboutUsTabsTarget +'"]').tab('show');
	});
}

$('#about-us-modal .popup-button-wrapper button.btn-custom').on('click', function(e) {
	var target = $(this).data('target');
	$('#about-us-modal-mobile-navigation a[data-target="'+ target +'"]').tab('show');
});


var servicesTabsButtons = document.querySelectorAll('#services .tab-content .tab-pane button.btn-custom');

for(var i = 0; i < servicesTabsButtons.length; i++) {
	servicesTabsButtons[i].addEventListener('click', function() {
		var servicesTabsTarget = this.getAttribute('data-target');
		$('#services-modal').modal('toggle');
		console.log(servicesTabsTarget);
		$('#services-modal #services-modal-mobile-navigation a[data-target="'+ servicesTabsTarget +'"]').tab('show');
	});
}

/****************************************/
/* OPEN CERTAIN TABS ON MODAL OPEN END  */
/****************************************/

/****************************************/
/*           SEARCH FUNCTION            */
/****************************************/
var openSearchButtonDesktop = document.querySelector('#btn-open-search-desktop');
var openSearchButtonMobile  = document.querySelector('#btn-open-search-mobile');
var searchOverlay			= document.querySelector('.search-overlay');
var closeSearch				= searchOverlay.querySelector('button.btn-close');

openSearchButtonDesktop.addEventListener('click', function() {
	searchOverlay.classList.add('active');
	document.querySelector('#input-desktop-search').focus();
});

openSearchButtonMobile.addEventListener('click', function() {
	searchOverlay.classList.add('active');
	document.querySelector('#input-desktop-search').focus();
});

closeSearch.addEventListener('click', function() {
	searchOverlay.classList.remove('active');
});

/****************************************/
/*         SEARCH FUNCTION END          */
/****************************************/
