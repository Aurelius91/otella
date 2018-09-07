<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
	<div id="search" class="modal-custom full fade in" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<a href="<?= base_url(); ?>">
						<button class="close-modal" data-dismiss="modal">
							<div class="close-icon">
								<span class="stripe"></span>
								<span class="stripe"></span>
							</div>
						</button>
					</a>
					<div class="popup-header" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/header.jpg)">
						<div class="black-overlay"></div>
						<div class="popup-header-content">
							<h1>Search Result</h1>
						</div>

						<div class="scroll-down-icon-wrapper">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon-white.png" class="scroll-down-icon" alt="Scroll Down">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow-white.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
						</div>
					</div>
					<div class="popup-content padding">
						<div class="search-result-container">
							<div class="row">
								<div class="col-xs-12">
									<h2>Search Result</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<a href="<?= base_url(); ?>search/">
										<div class="search-point">
											<h4>Search Result 1</h4>
											<p>Search result description...</p>
										</div>
									</a>

									<a href="<?= base_url(); ?>search/">
										<div class="search-point">
											<h4>Search Result 2</h4>
											<p>Search result description...</p>
										</div>
									</a>

									<a href="<?= base_url(); ?>search/">
										<div class="search-point">
											<h4>Search Result 3</h4>
											<p>Search result description...</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
	  	</div>
	</div>
</body>

<!--[if (lt IE 9)]><script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.helper.ie8.js"></script><![endif]-->
<script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"><\/script>'); }</script>
<!-- <script src="<?= base_url(); ?>assets/plugin/bootstrap/js/bootstrap-custom.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="<?= base_url(); ?>assets/plugin/gsap/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async defer></script>

<script type="text/javascript">

var laneContainer = document.querySelectorAll('.popup-navigation-lane-container');
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
		for(var i = 0;i<laneContainer.length;i++) {
			TweenLite.to(laneContainer[i].querySelector('.popup-navigation-to-drag'), 1, {
				x:'0',
				onComplete: function() {
					this.target.classList.remove('dragged');
					$(this.target).next().next().removeClass('invisible');
				}
			});
		}
	}
}

var newsAndGallerySlider;

initNewsAndGallerySlider();

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

</script>


</html>
