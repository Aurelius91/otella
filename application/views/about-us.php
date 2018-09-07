<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
	<div id="about-us-modal" class="modal-custom full fade in">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<a href="<?= base_url(); ?>">
						<button class="close-modal">
							<div class="close-icon">
								<span class="stripe"></span>
								<span class="stripe"></span>
							</div>
						</button>
					</a>
					<div class="popup-header" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-detail.jpg)">
						<div class="black-overlay"></div>
						<div class="popup-header-content">
							<h1>ABOUT US</h1>
							<h4>Architecture is a visual art, and the buildings speak for themselves.</h4>
						</div>

						<div class="scroll-down-icon-wrapper">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon-white.png" class="scroll-down-icon" alt="Scroll Down">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow-white.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
						</div>
					</div>
					<div class="popup-content">
						<div class="popup-navigation">
							<ul class="nav nav-tabs nav-tabs-custom center visible-xs" id="about-us-modal-mobile-navigation">
								<li class="active"><a data-toggle="tab" href="#modal-about-us-section">About Us</a></li>
							  	<li><a data-toggle="tab" href="#modal-history-section">History</a></li>
							  	<li><a data-toggle="tab" href="#modal-our-team-section">Our Team</a></li>
							</ul>
							<div class="row hidden-xs">
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="popup-navigation-lane-container">
										<div class="popup-navigation-to-drag" data-target="#modal-about-us-section">
											<span class="unskew">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</div><!--
									 --><div class="popup-navigation-line-wrapper">
											<div class="popup-navigation-line"></div>
											<div class="popup-navigation-line-text">About Us</div>
										</div><!--
									 --><div class="popup-navigation-instruction-text">
											<p>Drag to Enter</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="popup-navigation-lane-container">
										<div class="popup-navigation-to-drag" data-target="#modal-history-section">
											<span class="unskew">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</div><!--
									 --><div class="popup-navigation-line-wrapper">
											<div class="popup-navigation-line"></div>
											<div class="popup-navigation-line-text">History</div>
										</div><!--
									 --><div class="popup-navigation-instruction-text">
											<p>Drag to Enter</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="popup-navigation-lane-container">
										<div class="popup-navigation-to-drag" data-target="#modal-our-team-section">
											<span class="unskew">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</div><!--
									 --><div class="popup-navigation-line-wrapper">
											<div class="popup-navigation-line"></div>
											<div class="popup-navigation-line-text">Our Team</div>
										</div><!--
									 --><div class="popup-navigation-instruction-text">
											<p>Drag to Enter</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="tab-content">
								  	<div id="modal-about-us-section" class="tab-pane fade in active">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-push-6">
												<div class="popup-about-us-padding-left">
													<div class="about-us-detail-image-wrapper">
														<div class="about-us-detail-image-1">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-detail-1.jpg)"></div>
														</div>
														<div class="about-us-detail-image-2" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-detail-2.jpg)"></div>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6 col-sm-pull-6">
												<div class="popup-about-us-padding-left">
													<h2>Architecture is a visual art, and the buildings speak for themselves.</h2>
													<div class="popup-about-us-content right">
														<h3>ABOUT US</h3>
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
														<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row row-relative popup-about-us-second-row">
											<div class="col-xs-12 col-sm-6 v-center-tablet">
												<div class="popup-about-us-padding-right">
													<div class="about-us-detail-image-wrapper">
														<div class="about-us-detail-image-2 left">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-detail-3.jpg)"></div>
														</div>
														<div class="about-us-detail-image-1 right">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-detail-4.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet">
												<div class="popup-about-us-padding-left">
													<div class="popup-about-us-content">
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequa.</p>
														<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor da nibh vel velit auctor aliquet. </p>
														<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="popup-button-wrapper">
											<div class="popup-button-wrapper-inner">
												<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-history-section">
													<span class="unskew">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</button>
												<span class="popup-prev-next-text">
													<p>Next to History</p>
												</span>
											</div>
										</div>
								  	</div>
								  	<div id="modal-history-section" class="tab-pane fade">
										<div class="row">
								    		<div class="col-xs-12">
								    			<div class="modal-detail-quote bigger-margin-bottom">
													<div class="modal-detail-quote-sign">
														<h2>The rules of navigation never navigated a ship. The rules of architecture never built a house.</h2>
													</div>
													<h4>Thomas Reid</h4>
								    			</div>
								    		</div>
								    	</div>
										<div class="modal-history-list">
											<div class="line"></div>
											<div class="row">
												<div class="modal-history-row odd">
													<div class="col-xs-12 col-sm-6 col-sm-push-6 v-center-tablet">
														<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="modal-history-supergraphic-image">
														<div class="modal-history-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/history-modal/history-1.jpg)"></div>
														</div>
													</div><!--
												 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 v-center-tablet">
												 		<div class="modal-history-image-description">
															<h1>2000</h1>
															<h2>THE BEGINNING</h2>
															<hr>
															<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum.</p>
												 		</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="modal-history-row even">
													<div class="col-xs-12 col-sm-6 v-center-tablet">
														<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="modal-history-supergraphic-image">
														<div class="modal-history-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/history-modal/history-2.jpg)"></div>
														</div>
													</div><!--
												 --><div class="col-xs-12 col-sm-6 v-center-tablet">
												 		<div class="modal-history-image-description">
															<h1>2010</h1>
															<h2>THE OPENING MASTERPIECE</h2>
															<hr>
															<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="modal-history-row odd">
													<div class="col-xs-12 col-sm-6 col-sm-push-6 v-center-tablet">
														<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="modal-history-supergraphic-image">
														<div class="modal-history-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/history-modal/history-3.jpg)"></div>
														</div>
													</div><!--
												 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 v-center-tablet">
												 		<div class="modal-history-image-description">
															<h1>2018</h1>
															<h2>OTELLA BECOME PIONEER</h2>
															<hr>
															<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="popup-button-wrapper">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-about-us-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494" enable-background="new 0 0 31.494 31.494"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Back to About Us</p>
														</span>
													</div>
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-our-team-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Next to Our Team</p>
														</span>
													</div>
												</div>
											</div>
										</div>
								  	</div>

								  	<div id="modal-our-team-section" class="tab-pane fade team">
										<img src="<?= base_url(); ?>assets/images/main/thank-you-modal-bg.png" alt="" class="modal-our-team-bg-image">
								    	<div class="row">
								    		<div class="col-xs-12">
								    			<div class="modal-detail-quote">
													<div class="modal-detail-quote-sign">
														<h2>The rules of navigation never navigated a ship. The rules of architecture never built a house.</h2>
													</div>
													<h4>Thomas Reid</h4>
								    			</div>
								    		</div>
								    	</div>
										<div class="row">
											<div class="modal-team-row">
												<div class="col-xs-12 col-sm-6 v-center-tablet">
													<div class="modal-team-image-wrapper">
														<img src="<?= base_url(); ?>assets/images/main/president-director.png" alt="" class="modal-team-image">
														<div class="modal-team-position-name">
															<span class="unskew">
																President Director
															</span>
														</div>
													</div>
												</div><!--
											 --><div class="col-xs-12 col-sm-6 v-center-tablet">
											 		<div class="modal-team-image-content">
														<h2>DJIE TJIAN AN</h2>
														<hr>
														<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum.</p>
														<p>Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version.</p>
											 		</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="modal-team-row">
												<div class="col-xs-12 col-sm-6 col-sm-push-6 v-center-tablet">
													<div class="modal-team-image-wrapper right">
														<img src="<?= base_url(); ?>assets/images/main/managing-director.png" alt="" class="modal-team-image">
														<div class="modal-team-position-name">
															<span class="unskew">
																Managing Director
															</span>
														</div>
													</div>
												</div><!--
											 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 v-center-tablet">
											 		<div class="modal-team-image-content left">
														<h2>IR.PHILIPUS WIRJADI</h2>
														<hr>
														<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum.</p>
														<p>Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version.</p>
											 		</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="popup-button-wrapper right-align margin-top relative">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-history-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494" enable-background="new 0 0 31.494 31.494"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Back to History</p>
														</span>
													</div>
												</div>
											</div>
										</div>
								  	</div>
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

var aboutUsTabsButtons = document.querySelectorAll('#about-us .tab-content .tab-pane button.btn-custom');

for(var i = 0; i < aboutUsTabsButtons.length; i++) {
	aboutUsTabsButtons[i].addEventListener('click', function() {
		var aboutUsTabsTarget = this.getAttribute('data-target');
		$('#about-us-modal').modal('toggle');
		$('#about-us-modal #about-us-modal-mobile-navigation a[href='+ aboutUsTabsTarget +']').tab('show');
	});
}

$('#about-us-modal .popup-button-wrapper button.btn-custom').on('click', function(e) {
	var target = $(this).data('target');
	$('#about-us-modal-mobile-navigation a[href='+ target +']').tab('show');
});

</script>


</html>
