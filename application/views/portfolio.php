<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>

	<div id="previous-works-modal" class="modal-custom full fade in">
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
					<div class="popup-header" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-detail.jpg)">
						<div class="black-overlay"></div>
						<div class="popup-header-content">
							<h1>Hospitality</h1>
							<h4>I don't want to do architecture that's dry and dull.</h4>
						</div>

						<div class="scroll-down-icon-wrapper">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon-white.png" class="scroll-down-icon" alt="Scroll Down">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow-white.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
						</div>
					</div>
					<div class="popup-content">
						<div class="popup-navigation">
							<div class="row">
								<div class="col-xs-12">
									<ul id="previous-works-modal-mobile-navigation" class="nav nav-tabs nav-tabs-custom center visible-xs" role="tablist">
								    	<li role="presentation" class="active"><a href="#modal-hospitality-section" aria-controls="home" role="tab" data-toggle="tab">hospitality</a></li>
								    	<li role="presentation"><a href="#modal-residence-section" aria-controls="profile" role="tab" data-toggle="tab">residence</a></li>
								    	<li role="presentation"><a href="#modal-retail-section" aria-controls="messages" role="tab" data-toggle="tab">retail</a></li>
								    	<li role="presentation"><a href="#modal-office-section" aria-controls="settings" role="tab" data-toggle="tab">office</a></li>
								  	</ul>
									<div class="row hidden-xs">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="popup-navigation-lane-container">
												<div class="popup-navigation-to-drag" data-target="#modal-hospitality-section" data-toggle="tab">
													<span class="unskew">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</div><!--
											 --><div class="popup-navigation-line-wrapper">
													<div class="popup-navigation-line"></div>
													<div class="popup-navigation-line-text">Hospitality</div>
												</div><!--
											--><div class="popup-navigation-instruction-text">
													<p>Drag to Enter</p>
												</div>
											</div>
										</div>
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="popup-navigation-lane-container">
                                                <div class="popup-navigation-to-drag" data-target="#modal-residence-section" data-toggle="tab">
                                                    <span class="unskew">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
                                                    </span>
                                                </div><!--
                                             --><div class="popup-navigation-line-wrapper">
                                                    <div class="popup-navigation-line"></div>
                                                    <div class="popup-navigation-line-text">Residence</div>
                                                </div><!--
                                             --><div class="popup-navigation-instruction-text">
                                                    <p>Drag to Enter</p>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="popup-navigation-lane-container">
												<div class="popup-navigation-to-drag" data-target="#modal-retail-section" data-toggle="tab">
													<span class="unskew">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</div><!--
											 --><div class="popup-navigation-line-wrapper">
													<div class="popup-navigation-line"></div>
													<div class="popup-navigation-line-text">Retail</div>
												</div><!--
											 --><div class="popup-navigation-instruction-text">
													<p>Drag to Enter</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="popup-navigation-lane-container">
												<div class="popup-navigation-to-drag" data-target="#modal-office-section" data-toggle="tab">
													<span class="unskew">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</div><!--
											 --><div class="popup-navigation-line-wrapper">
													<div class="popup-navigation-line"></div>
													<div class="popup-navigation-line-text">Office</div>
												</div><!--
											 --><div class="popup-navigation-instruction-text">
													<p>Drag to Enter</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="tab-content">
								  	<div id="modal-hospitality-section" class="tab-pane fade in active">
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>MANDARIN ORIENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-push-6 no-padding-left-tablet v-center-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 no-padding-right-tablet v-center-tablet">
												<div class="history-modal-content">
													<h2>INTERCONTINENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>PADMA UBUD HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 text-right">
												<div class="popup-button-wrapper">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-target="#modal-residence-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Next to Residence</p>
														</span>
													</div>
												</div>
											</div>
										</div>
								  	</div>
								  	<div id="modal-residence-section" class="tab-pane fade">
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>MANDARIN ORIENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-push-6 no-padding-left-tablet v-center-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 no-padding-right-tablet v-center-tablet">
												<div class="history-modal-content">
													<h2>INTERCONTINENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>PADMA UBUD HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 text-right">
												<div class="popup-button-wrapper relative">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-target="#modal-retail-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Next to Retail</p>
														</span>
													</div>
												</div>
											</div>
										</div>
								  	</div>
								  	<div id="modal-retail-section" class="tab-pane fade">
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>MANDARIN ORIENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-push-6 no-padding-left-tablet v-center-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 no-padding-right-tablet v-center-tablet">
												<div class="history-modal-content">
													<h2>INTERCONTINENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>PADMA UBUD HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 text-right">
												<div class="popup-button-wrapper relative">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-target="#modal-office-section">
															<span class="unskew">
																<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
															</span>
														</button>
														<span class="popup-prev-next-text">
															<p>Next to Office</p>
														</span>
													</div>
												</div>
											</div>
										</div>
								  	</div>
									<div id="modal-office-section" class="tab-pane fade">
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>MANDARIN ORIENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-push-6 no-padding-left-tablet v-center-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 col-sm-pull-6 no-padding-right-tablet v-center-tablet">
												<div class="history-modal-content">
													<h2>INTERCONTINENTAL HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 v-center-tablet no-padding-right-tablet">
												<div class="modal-carousel">
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-3-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-2-1.jpg)"></div>
														</div>
													</div>
													<div>
														<div class="previous-works-carousel-modal-image">
															<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/previous-work-modal/hospitality-1-1.jpg)"></div>
														</div>
													</div>
												</div>
											</div><!--
										 --><div class="col-xs-12 col-sm-6 v-center-tablet no-padding-left-tablet">
												<div class="history-modal-content">
													<h2>PADMA UBUD HOTEL</h2>
													<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
													<p>Architect		 : By Abthoni Seodarjo<br>
														Luas Tanah	 : 200m<br>
														Luas Bangunan	 : 360m
													</p>
												</div>
												<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="previous-work-supergraphic">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 text-right">
												<div class="popup-button-wrapper relative right-align">
													<div class="popup-button-wrapper-inner">
														<button class="btn btn-custom popup-prev-next" data-target="#modal-retail-section">
		                                                    <span class="unskew">
		                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494" enable-background="new 0 0 31.494 31.494"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/></svg>
		                                                    </span>
														</button>
														<span class="popup-prev-next-text">
															<p>Back to Retail</p>
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

var previousWorksSlider = [];
var previousWorksSliderTarget = '';

createCarousel();

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

</script>


</html>
