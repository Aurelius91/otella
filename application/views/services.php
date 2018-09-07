<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
	<div id="services-modal" class="modal-custom full fade in" role="dialog">
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
					<div class="popup-header" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/header.jpg)">
						<div class="black-overlay"></div>
						<div class="popup-header-content">
							<h1>CONSTRUCTION</h1>
							<h4>Architecture is a visual art, and the buildings speak for themselves.</h4>
						</div>

						<div class="scroll-down-icon-wrapper">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon-white.png" class="scroll-down-icon" alt="Scroll Down">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow-white.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
						</div>
					</div>
					<div class="popup-content padding-bottom">
						<div class="popup-navigation">
							<ul id="services-modal-mobile-navigation" class="nav nav-tabs nav-tabs-custom center visible-xs">
								<li class="active"><a data-toggle="tab" href="#modal-construction-section">Construction</a></li>
							  	<li><a data-toggle="tab" href="#modal-interior-section">Interior</a></li>
							</ul>
							<div class="row hidden-xs">
								<div class="col-xs-12 col-sm-4 col-sm-offset-2">
									<div class="popup-navigation-lane-container">
										<div class="popup-navigation-to-drag" data-target="#modal-construction-section">
											<span class="unskew">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</div><!--
									 --><div class="popup-navigation-line-wrapper">
											<div class="popup-navigation-line"></div>
											<div class="popup-navigation-line-text">Construction</div>
										</div><!--
									 --><div class="popup-navigation-instruction-text">
											<p>Drag to Enter</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="popup-navigation-lane-container">
										<div class="popup-navigation-to-drag" data-target="#modal-interior-section">
											<span class="unskew">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</div><!--
									 --><div class="popup-navigation-line-wrapper">
											<div class="popup-navigation-line"></div>
											<div class="popup-navigation-line-text">Interior</div>
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
								  	<div id="modal-construction-section" class="tab-pane fade in active">
										<div class="construction-content-wrapper">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 v-center-tablet">
                                                    <div class="popup-construction">
                                                        <h2>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</h2>
                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                    </div>
                                                </div><!--
                                             --><div class="col-xs-12 col-sm-6 v-center-tablet">
                                                    <div class="popup-construction-count">
                                                        <img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="supergraphic">
                                                        <div class="popup-construction-count-text">
                                                            <h1>125</h1>
                                                            <h2>Buildings</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row construction-row-2">
                                                <div class="col-xs-12 col-sm-6">
                                                    <div class="construction-image-1">
                                                        <div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/construction-1.jpg)"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 popup-construction">
                                                    <h2 class="construction-image-1-title hidden-xs">
                                                        UBUD
                                                        <br>
                                                        BALI
                                                    </h2>
                                                    <div class="construction-content-variation-1">
                                                        <h2 class="construction-image-1-title visible-xs">
                                                            UBUD
                                                            <br>
                                                            BALI
                                                        </h2>
                                                        <hr>
                                                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                        <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row construction-row-3">
                                                <div class="col-xs-12 col-sm-6 popup-construction">
                                                    <div class="construction-content-2">
                                                        <img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="supergraphic">
                                                        <h2 class="construction-image-2-title hidden-xs">
                                                            Bukit Pandawa Resort
                                                        </h2>
                                                        <div class="construction-image-2">
                                                            <div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/construction-3.jpg)"></div>
                                                        </div>
                                                        <div class="construction-content-variation-2">
                                                            <h2 class="construction-image-2-title visible-xs">
                                                                Bukit Pandawa Resort
                                                            </h2>
                                                            <hr>
                                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 popup-construction">
                                                    <div class="construction-content-3">
                                                        <div class="construction-image-3">
                                                            <div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/construction-2.jpg)"></div>
                                                        </div>
                                                        <div class="construction-content-variation-3">
                                                            <h2>waldrof astoria</h2>
                                                            <hr>
                                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popup-button-wrapper relative right-align">
    											<div class="popup-button-wrapper-inner">
    												<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-interior-section">
    													<span class="unskew">
    														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
    													</span>
    												</button>
    												<span class="popup-prev-next-text">
    													<p>Next to Interior</p>
    												</span>
    											</div>
    										</div>
                                        </div>
								  	</div>
                                    <div id="modal-interior-section" class="tab-pane fade">
										<div class="row row-relative">
											<div class="col-xs-12 col-sm-6 v-center-tablet">
												<div class="popup-interior-right">
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
												<div class="popup-interior-left">
													<div class="popup-interior-content">
                                                        <h2>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitu</h2>
														<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
														<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit</p>
														<p>Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
													</div>
												</div>
											</div>
										</div>
                                        <div class="row popup-interior-second-row">
											<div class="col-xs-12 col-sm-7 col-sm-push-5 v-center-tablet">
												<div class="popup-interior-left">
													<div class="interior-detail-image-1">
														<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/interior-1.jpg)"></div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-5 col-sm-pull-7 v-center-tablet">
												<div class="popup-interior-right both">
													<h2>This is Photoshop's version of Lorem Ipsum.</h2>
													<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
													<p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.</p>
                                                    <p>Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etia</p>
												</div>
											</div>
										</div>
                                        <div class="row popup-interior-third-row">
                                            <div class="col-xs-12 popup-interior-outer">
                                                <div class="blue-bg-box"></div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 ">
                                                        <div class="popup-interior-wrapper">
                                                            <div class="popup-interior-image-2">
                                                                <div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/interior-2.jpg)"></div>
                                                            </div>
                                                            <div class="popup-interior-image-content">
                                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="popup-interior-wrapper">
                                                            <div class="popup-interior-image-2">
                                                                <div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/construction-modal/interior-3.jpg)"></div>
                                                            </div>
                                                            <div class="popup-interior-image-content">
                                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<div class="popup-button-wrapper relative right-align">
											<div class="popup-button-wrapper-inner">
												<button class="btn btn-custom popup-prev-next" data-toggle="tab" data-target="#modal-construction-section">
                                                    <span class="unskew">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494" enable-background="new 0 0 31.494 31.494"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/></svg>
                                                    </span>
												</button>
												<span class="popup-prev-next-text">
													<p>Back to Construction</p>
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
</body>

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

	var servicesTabsButtons = document.querySelectorAll('#services .tab-content .tab-pane button.btn-custom');

	for(var i = 0; i < servicesTabsButtons.length; i++) {
		servicesTabsButtons[i].addEventListener('click', function() {
			var servicesTabsTarget = this.getAttribute('data-target');
			$('#services-modal').modal('toggle');
			console.log(servicesTabsTarget);
			$('#services-modal #services-modal-mobile-navigation a[href='+ servicesTabsTarget +']').tab('show');
		});
	}
</script>

</html>
