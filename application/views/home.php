<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
    <div id="navigation">
		<button class="mobile-menu-toggle">
			<span></span>
			<span></span>
			<span></span>
		</button>
    	<div class="navigation-left">
    		<ul class="menu-tes">

    			<li data-menuanchor="PreviousWorks"><a href="#PreviousWorks"><span>PORTFOLIO</span></a></li>
    			<li data-menuanchor="AboutUs"><a href="#AboutUs"><span>ABOUT US</span></a></li>
                <li data-menuanchor="NewsAndGallery"><a href="#NewsAndGallery"><span>news & GALLERY</span></a></li>
    		</ul>
    	</div><!--
	 --><div class="navigation-logo">
			<img src="<?= base_url(); ?>assets/images/main/logo.png" data-menuanchor="Header" alt="Otella" class="logo">
		</div><!--
	 --><div class="navigation-right">
			<ul class="menu-tes">
				<li data-menuanchor="ContactUs"><a href="#ContactUs"><span>CONTACT US</span></a></li>
				<li data-menuanchor="Career"><a href="#Career"><span>CAREER</span></a></li>
                <li data-menuanchor="Services"><a href="#Services"><span>SERVICES</span></a></li>
				<li class="search-button-container"><button class="btn btn-search"><img src="<?= base_url(); ?>assets/images/main/search-icon.png" alt="Search" class="search-icon"></button></li>
			</ul>
		</div>
    </div>
	<div id="navigation-mobile-menu">
		<ul class="nav navigation-mobile-menu-list">
			<li><a href="#header">Home</a></li>
			<li><a href="#previous-works">Portfolio</a></li>
			<li><a href="#about-us">About Us</a></li>
			<li><a href="#news-and-gallery">News &amp; Gallery</a></li>
			<li><a href="#contact-us">Contact Us</a></li>
			<li><a href="#career">Career</a></li>
			<li><a href="#services">Services</a></li>
		</ul>
		<ul class="choose-language mobile">
			<li>EN</li>
			<li>ID</li>
		</ul>
		<ul class="social-media-icon-wrapper mobile">
			<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div id="navigation-bottom">
		<div class="navigation-bottom-inner">
			<div class="choose-language desktop">
				<ul>
					<li>EN</li>
					<li>ID</li>
				</ul>
			</div>
			<div class="scroll-down-icon-wrapper">
				<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon.png" class="scroll-down-icon" alt="Scroll Down">
				<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
			</div>
			<div class="social-media-icon-wrapper desktop">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="side-menu" id="consultant-side-menu">
		<button class="close-modal close-modal-slide">
			<div class="close-icon">
				<span class="stripe"></span>
				<span class="stripe"></span>
			</div>
		</button>
		<div class="flex">
			<div class="inner">
				<h2>CONSULTANT</h2>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="consultant-name" placeholder=" ">
							<label for="consultant-name">Name</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="consultant-phone-number" placeholder=" ">
							<label for="consultant-phone-number">Phone Number</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="email" class="form-control input-custom" id="consultant-email" placeholder=" ">
							<label for="consultant-email">Email</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="consultant-portfolio" class="normal">Portfolio</label>
							<input type="file" class="form-control input-custom" id="consultant-portfolio">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-custom">
							<span class="unskew">
								<span class="text">SUBMIT</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="side-menu" id="supplier-side-menu">
		<button class="close-modal close-modal-slide">
			<div class="close-icon">
				<span class="stripe"></span>
				<span class="stripe"></span>
			</div>
		</button>
		<div class="flex">
			<div class="inner">
				<h2>SUPPLIER</h2>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="supplier-company" placeholder=" ">
							<label for="supplier-company">Company</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="supplier-contact-person" placeholder=" ">
							<label for="supplier-contact-person">Contact Person</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="email" class="form-control input-custom" id="supplier-email" placeholder=" ">
							<label for="supplier-email">Email</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="supplier-phone-number" placeholder=" ">
							<label for="supplier-phone-number">Phone</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<input type="text" class="form-control input-custom" id="supplier-product" placeholder=" ">
							<label for="supplier-product">Product</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="supplier-catalogue" class="normal">Catalogue</label>
							<input type="file" class="form-control input-custom" id="supplier-catalogue">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-custom">
							<span class="unskew">
								<span class="text">SUBMIT</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div id="fullpage">
    	<div class="section" id="header">
            <img src="<?= base_url(); ?>assets/images/main/supergraphic.png" alt="" class="supergraphic">

            <div class="header-bg customer" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg.png);"></div>
			<div class="header-bg consultant hidden" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg-consultant.png);"></div>
			<div class="header-bg supplier hidden" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg-supplier.png);"></div>

    		<div class="section-content half less header-type-bg" id="customer-header-content">
    			<h1>FIND YOUR NEEDS</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom" data-toggle="modal" data-target="#find-my-needs-modal">
					<span class="unskew">
						<span class="text">Find my needs</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
					</span>
				</button>
    		</div>

			<div class="section-content half less header-type-bg hidden" id="consultant-header-content">
    			<h1>consultant</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom btn-side-menu-toggle" data-target="#consultant-side-menu">
					<span class="unskew">
						<span class="text">I am interest to be consultant</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
					</span>
				</button>
    		</div>

			<div class="section-content half less header-type-bg hidden" id="supplier-header-content">
    			<h1>SUPPLIER</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom btn-side-menu-toggle" data-target="#supplier-side-menu">
					<span class="unskew">
						<span class="text">I am interest to be supplier</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
					</span>
				</button>
    		</div>
    	</div>

		<div class="section" id="previous-works">
            <div class="section-content no-padding">
				<div class="cd-slider-wrapper">
					<ul id="previous-works-slide" class="cd-slider">
						<li class="visible" style="background-image:url(<?= base_url(); ?>assets/images/main/works-1.jpg)">
							<div class="black-overlay bg">
								<div class="previous-works-slider-content">
									<h2>HOSPITALITY</h2>
									<button id="open-hospitality-tabs" class="btn btn-custom transparent inverted normal no-border" data-target="#modal-hospitality-section">
										<span class="unskew">
											See Project
										</span>
									</button>
								</div>
							</div>
						</li>

						<li style="background-image:url(<?= base_url(); ?>assets/images/main/slide-2.jpg)">
							<div class="black-overlay bg">
								<div class="previous-works-slider-content">
									<h2>RESIDENCE</h2>
									<button id="open-residence-tabs" class="btn btn-custom transparent inverted normal no-border" data-target="#modal-residence-section">
										<span class="unskew">
											See Project
										</span>
									</button>
								</div>
							</div>
						</li>

						<li style="background-image:url(<?= base_url(); ?>assets/images/main/slide-3.jpg)">
							<div class="black-overlay bg">
								<div class="previous-works-slider-content">
									<h2>RETAIL</h2>
									<button id="open-retail-tabs" class="btn btn-custom transparent inverted normal no-border" data-target="#modal-retail-section">
										<span class="unskew">
											See Project
										</span>
									</button>
								</div>
							</div>
						</li>

						<li style="background-image:url(<?= base_url(); ?>assets/images/main/slide-2.jpg)">
							<div class="black-overlay bg">
								<div class="previous-works-slider-content">
									<h2>Office</h2>
									<button id="open-office-tabs" class="btn btn-custom transparent inverted normal no-border" data-target="#modal-office-section">
										<span class="unskew">
											See Project
										</span>
									</button>
								</div>
							</div>
						</li>
					</ul> <!-- .cd-slider -->

					<ol class="cd-slider-controls">
						<li class="selected"><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ol> <!-- .cd-slider-controls -->

					<ul class="cd-slider-navigation">
						<li class="prev"><img src="<?= base_url(); ?>assets/images/main/prev-arrow.png" alt="Previous"></li>
						<li class="next"><img src="<?= base_url(); ?>assets/images/main/next-arrow.png" alt="Next"></li>
					</ul>

					<div class="cd-svg-cover" data-step1="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z" data-step2="M1400,800H383L770.7,0.6c0.2-0.3,0.5-0.6,0.9-0.6H1400v294V800z" data-step3="M1400,800H0V0.6C0,0.4,0,0.3,0,0h1400v294V800z" data-step4="M615,800H0V0.6C0,0.4,0,0.3,0,0h615L393,312L615,800z" data-step5="M0,800h-2V0.6C-2,0.4-2,0.3-2,0h2v312V800z" data-step6="M-2,800h2L0,0.6C0,0.3,0,0.3,0,0l-2,0v294V800z" data-step7="M0,800h1017L629.3,0.6c-0.2-0.3-0.5-0.6-0.9-0.6L0,0l0,294L0,800z" data-step8="M0,800h1400V0.6c0-0.2,0-0.3,0-0.6L0,0l0,294L0,800z" data-step9="M785,800h615V0.6c0-0.2,0-0.3,0-0.6L785,0l222,312L785,800z" data-step10="M1400,800h2V0.6c0-0.2,0-0.3,0-0.6l-2,0v312V800z">
						<svg height='100%' width="100%" preserveAspectRatio="none" viewBox="0 0 1400 800">
							<path id="cd-changing-path" d="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z"/>
						</svg>
					</div> <!-- .cd-svg-cover -->
				</div>
			</div>
    	</div>

        <div class="section" id="about-us">
            <img src="<?= base_url(); ?>assets/images/main/supergraphic.png" alt="" class="supergraphic">
    		<div class="section-content  half padding-left">
				<div class="section-title">
					<h1>Make the dreams of OTELLA best view of reality</h1>
				</div>
                <ul class="nav nav-tabs nav-tabs-custom">
                    <li class="active"><a data-toggle="tab" href=".about-us-tabs">About Us</a></li>
                    <li><a data-toggle="tab" href=".history-tabs">History</a></li>
                    <li><a data-toggle="tab" href=".team-tabs">Team</a></li>
                </ul>

                <div class="tab-content">
                    <div class="about-us-tabs tab-pane tab-pane-custom fade in active">
                        <h3>ARCHITECTURE IS A VISUAL ART</h3>
						<hr class="about-us-tabs-line">
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						<button id="open-about-us-tabs" class="btn btn-custom" style="margin-top:25px" data-target="#modal-about-us-section">
							<span class="unskew">
								<span class="text">See More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
                    </div>
                    <div class="history-tabs tab-pane tab-pane-custom fade">
                        <h3>The Beginning</h3>
						<hr class="about-us-tabs-line">
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						<button id="open-history-tabs" class="btn btn-custom" style="margin-top:25px" data-target="#modal-history-section">
							<span class="unskew">
								<span class="text">See More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
                    </div>
                    <div class="team-tabs tab-pane tab-pane-custom fade">
                        <h3>DJIE TJIAN AN</h3>
						<hr class="about-us-tabs-line">
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						<button id="open-team-tabs" class="btn btn-custom" style="margin-top:25px" data-target="#modal-our-team-section">
							<span class="unskew">
								<span class="text">See More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
                    </div>
                </div>
    		</div>

			<div class="tab-content tab-content-image">
				<div class="about-us-tabs tab-pane tab-pane-custom fade in active">
					<img src="<?= base_url(); ?>assets/images/main/about-us-bg.png" alt="" class="header-img">
				</div>
				<div class="history-tabs tab-pane tab-pane-custom fade">
					<!-- <img src="<?= base_url(); ?>assets/images/main/about-us-bg.png" alt="" class="header-img"> -->
					<div class="history-tabs-image-wrapper">
						<div class="history-tabs-image">
							<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-bg-history-1.jpg)"></div>
						</div>
						<div class="history-tabs-image">
							<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/about-us-bg-history-2.jpg)"></div>
						</div>
						<h1>2000</h1>
					</div>
				</div>
				<div class="team-tabs tab-pane tab-pane-custom fade">
					<div class="team-tabs-image-wrapper">
						<img src="<?= base_url(); ?>assets/images/main/president-director.png" alt="" class="team-tabs-image">
						<div class="team-tabs-position-name">
							<span class="unskew">
								President Director
							</span>
						</div>
					</div>
				</div>
			</div>
    	</div>

    	<div class="section" id="news-and-gallery">
    		<div class="section-content no-padding">
				<div class="news-and-gallery-slider">
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-1.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-6.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-2.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-7.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-3.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-8.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-4.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-5.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-1.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-6.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
					<div>
						<div class="news-and-gallery-thumbnail">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-2.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
						<div class="news-and-gallery-thumbnail bottom">
							<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-7.jpg)">
								<div class="black-overlay bg">
									<div class="news-and-gallery-content">
										<h4>Otella as the Winner of Best Architecture 2018</h4>
										<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
										<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
											<span class="unskew">
												<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
		    			</div>
					</div>
				</div>
				<ul class="custom-controls" id="news-and-gallery-slider-custom-controls">
		            <li class="prev">
		            	<img src="<?= base_url(); ?>assets/images/main/slider-prev.png" alt="Prev">
		            </li>
		            <li class="next">
		            	<img src="<?= base_url(); ?>assets/images/main/slider-next.png" alt="Prev">
		            </li>
	          	</ul>
    		</div>
    	</div>

		<div class="section" id="contact-us">
            <img src="<?= base_url(); ?>assets/images/main/supergraphic.png" alt="" class="supergraphic">
            <div class="header-image">
				<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="xMinYMid slice" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
					<g>
						<clipPath id="contact-us-mask" clipPathUnits="objectBoundingBox">
							<polygon points="0 1, 0.2 0, 1 0,1 1" />
						</clipPath>
					</g>
					<image clip-path="url(#contact-us-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/contact-us-bg.jpg" />
				</svg>
            </div>
    		<div class="section-content half padding-left">
				<div class="section-title">
					<h1>CONTACT US</h1>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						  	<input type="text" class="form-control input-custom" id="name" placeholder=" ">
							<label for="name">Name</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						  	<input type="text" class="form-control input-custom" id="phone-number" placeholder=" ">
							<label for="phone-number">Phone Number</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						  	<input type="email" class="form-control input-custom" id="email" placeholder=" ">
							<label for="email">Email</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						  	<textarea type="text" class="form-control input-custom" id="message" placeholder=" " rows="4"></textarea>
							<label for="message">Message</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button class="btn btn-custom">
							<span class="unskew">
								<span class="text">Submit</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
					</div>
				</div>
    		</div>
    	</div>

		<div class="section" id="career">
    		<div class="section-content padding-left no-padding-right">
				<div class="row">
					<div class="col-xs-12">
						<h1>Career</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="career-slider">
						  	<div>
								<div class="item-wrapper">
									<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
										<g>
											<clipPath id="career-slider-mask" clipPathUnits="objectBoundingBox">
												<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
											</clipPath>
										</g>
										<image clip-path="url(#career-slider-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/career-1.jpg" />
										<rect clip-path="url(#career-slider-mask)" class="black-overlay"></rect>
									</svg>
									<div class="text-wrapper">
										<h3>ARCHITECT</h3>
										<p>This is Photoshop's vversion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<button class="btn btn-custom" data-toggle="modal" data-target="#career-detail-modal">
											<span class="unskew">
												See Detail
											</span>
										</button>
									</div>
								</div>
						  	</div>
						  	<div>
								<div class="item-wrapper">
									<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
										<image clip-path="url(#career-slider-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/career-2.jpg" />
										<rect clip-path="url(#career-slider-mask)" class="black-overlay"></rect>
									</svg>
									<div class="text-wrapper">
										<h3>ARCHITECT</h3>
										<p>This is Photoshop's vversion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<button class="btn btn-custom" data-toggle="modal" data-target="#career-detail-modal">
											<span class="unskew">
												See Detail
											</span>
										</button>
									</div>
								</div>
						  	</div>
						  	<div>
								<div class="item-wrapper">
									<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
										<image clip-path="url(#career-slider-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/career-3.jpg" />
										<rect clip-path="url(#career-slider-mask)" class="black-overlay"></rect>
									</svg>
									<div class="text-wrapper">
										<h3>ARCHITECT</h3>
										<p>This is Photoshop's vversion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<button class="btn btn-custom" data-toggle="modal" data-target="#career-detail-modal">
											<span class="unskew">
												See Detail
											</span>
										</button>
									</div>
								</div>
						  	</div>
							<div>
								<div class="item-wrapper">
									<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
										<image clip-path="url(#career-slider-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/career-2.jpg" />
										<rect clip-path="url(#career-slider-mask)" class="black-overlay"></rect>
									</svg>
									<div class="text-wrapper">
										<h3>ARCHITECT</h3>
										<p>This is Photoshop's vversion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<button class="btn btn-custom" data-toggle="modal" data-target="#career-detail-modal">
											<span class="unskew">
												See Detail
											</span>
										</button>
									</div>
								</div>
						  	</div>
						  	<div>
								<div class="item-wrapper">
									<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
										<image clip-path="url(#career-slider-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="<?= base_url(); ?>assets/images/main/career-1.jpg" />
										<rect clip-path="url(#career-slider-mask)" class="black-overlay"></rect>
									</svg>
									<div class="text-wrapper">
										<h3>ARCHITECT</h3>
										<p>This is Photoshop's vversion  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</p>
										<button class="btn btn-custom" data-toggle="modal" data-target="#career-detail-modal">
											<span class="unskew">
												See Detail
											</span>
										</button>
									</div>
								</div>
						  	</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="drag-instruction-container">
							<img src="<?= base_url(); ?>assets/images/main/arrow-right.png" alt="Drag" class="drag-arrow"><p class="drag-arrow-text">Drag to see another job vacancy</p>
						</div>
					</div>
				</div>
    		</div>
    	</div>

        <div class="section" id="services">
            <img src="<?= base_url(); ?>assets/images/main/supergraphic.png" alt="" class="supergraphic">
    		<div class="section-content  half padding-left">
				<div class="section-title">
					<h1>Make the dreams of OTELLA best view of reality</h1>
				</div>
                <ul class="nav nav-tabs nav-tabs-custom">
                    <li class="active"><a data-toggle="tab" href=".construction-tabs">Construction</a></li>
                    <li><a data-toggle="tab" href=".interior-tabs">Interior</a></li>
                </ul>

                <div class="tab-content">
                    <div class="construction-tabs tab-pane tab-pane-custom fade in active">
                        <h3>ARCHITECTURE IS A VISUAL ART</h3>
						<hr class="about-us-tabs-line">
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						<button class="btn btn-custom" style="margin-top:25px" data-target="#modal-construction-section">
							<span class="unskew">
								<span class="text">See More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
                    </div>
                    <div class="interior-tabs tab-pane tab-pane-custom fade">
                        <h3>The Beginning</h3>
						<hr class="about-us-tabs-line">
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>

						<button class="btn btn-custom" style="margin-top:25px" data-target="#modal-interior-section">
							<span class="unskew">
								<span class="text">See More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
							</span>
						</button>
                    </div>
                </div>
    		</div>

			<div class="tab-content tab-content-image">
				<div class="construction-tabs tab-pane tab-pane-custom fade in active">
					<img src="<?= base_url(); ?>assets/images/main/construction-bg.png" alt="" class="header-img">
				</div>
				<div class="interior-tabs tab-pane tab-pane-custom fade">
					<img src="<?= base_url(); ?>assets/images/main/interior-bg.png" alt="" class="header-img big">
				</div>
			</div>
    	</div>
    </div>

	<div id="initial-modal" class="modal modal-custom fade" role="dialog" data-backdrop="static" data-keyboard="false">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-content-inner">
					<div class="modal-body">
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin accumsan ipsum velit?</p>
						<div class="text-center">
							<div class="b2b-choice-wrapper">
								<button id="button-b2b-initial" class="btn btn-custom min-width smaller-padding">
									<span class="unskew">
										B2B
									</span>
								</button>
								<div class="b2b-choice-option hidden">
									<div class="line"></div>
									<button class="btn btn-custom min-width smaller-padding" onclick="selectPeople('consultant')"><span class="unskew">Consultant</span></button>
									<button class="btn btn-custom min-width smaller-padding" onclick="selectPeople('supplier')"><span class="unskew">Supplier</span></button>
								</div>
							</div>
							<button class="btn btn-custom min-width smaller-padding" onclick="selectPeople('customer')">
								<span class="unskew">
									End Customer
								</span>
							</button>
						</div>
					</div>
				</div>
		    </div>
	  	</div>
	</div>

	<div id="find-my-needs-modal" class="modal modal-custom fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<img src="<?= base_url(); ?>assets/images/main/logo.png" alt="Otella" class="logo">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
					<img src="<?= base_url(); ?>assets/images/main/modal-supergraphic.png" alt="" class="modal-supergraphic">
					<div class="find-my-needs-slider">
						<div>
							<div class="find-my-needs-slider-layout-1" id="find-my-needs-question-1">
								<div class="row">
									<div class="col-xs-12 text-center">
										<p>The visual that appeals to me most is .......</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 small-padding-right-mobile">
										<div class="find-my-needs-thumbnail-1 find-my-needs-image selected">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-1.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">1</p>
											</div>
										</div>
									</div>
									<div class="col-xs-6 small-padding-left-mobile">
										<div class="find-my-needs-thumbnail-1 find-my-needs-image">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-2.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">2</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 small-padding-right-mobile">
										<div class="find-my-needs-thumbnail-1 find-my-needs-image">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-3.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">3</p>
											</div>
										</div>
									</div>
									<div class="col-xs-6 small-padding-left-mobile">
										<div class="find-my-needs-thumbnail-1 find-my-needs-image">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-4.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">4</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 small-padding-right-mobile text-right">
										<button class="btn btn-custom min-width find-my-needs-prev">
											<span class="unskew">
												<span class="text">Previous</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/>
											</span>
										</button>
									</div>
									<div class="col-xs-6 small-padding-left-mobile">
										<button class="btn btn-custom min-width find-my-needs-next">
											<span class="unskew">
												<span class="text">Next</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="find-my-needs-slider-layout-2" id="find-my-needs-question-2">
								<div class="row">
									<div class="col-xs-12 text-center">
										<p>The following words describe me best .......</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-4 small-padding-right-mobile">
										<div class="find-my-needs-thumbnail-2 find-my-needs-image-2 selected">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-1.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">1</p>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 small-padding-left-mobile">
										<div class="find-my-needs-thumbnail-2 find-my-needs-image-2">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-2.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">2</p>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-4 small-padding-left-mobile">
										<div class="find-my-needs-thumbnail-2 find-my-needs-image-2">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-3.jpg)">
												<div class="black-overlay lighter"></div>
												<img src="<?= base_url(); ?>assets/images/main/answer-hover.png" alt="Select Answer" class="answer-hover">
												<p class="answer-no">3</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 text-right">
										<button class="btn btn-custom min-width find-my-needs-prev">
											<span class="unskew">
												<span class="text">Previous</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M10.273 5.009c.444-.444 1.143-.444 1.587 0 .429.429.429 1.143 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127h-26.554l8.047 8.032c.429.444.429 1.159 0 1.587-.444.444-1.143.444-1.587 0l-9.952-9.952c-.429-.429-.429-1.143 0-1.571l9.952-9.952z" fill="#fff"/>
											</span>
										</button>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-custom min-width" id="find-my-needs-final">
											<span class="unskew">
												<span class="text">Finish</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h1 class="slider-number">
						<span class="slider-number-current">1</span>
						<span>of</span>
						<span class="slider-number-total">5</span>
					</h1>
				</div>
		    </div>
	  	</div>
	</div>

	<div id="thank-you-modal" class="modal modal-custom fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<button class="close-modal inverted" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
					<div class="row row-eq-height-tablet">
						<div class="col-xs-12 col-sm-6 col-sm-push-6">
							<div class="thank-you-modal-image">
								<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/thank-you-modal.jpg)"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-sm-pull-6">
							<img src="<?= base_url(); ?>assets/images/main/thank-you-modal-bg.png" alt="" class="thank-you-modal-bg">
							<div class="thank-you-modal-content">
								<img src="<?= base_url(); ?>assets/images/main/logo.png" alt="Otella" class="logo">
								<h3>NICELY DONE !</h3>
								<div class="thank-you-modal-description">
									<p>We have just the right solution for you. <br>Submit your email below and we work on it </p>
								</div>
								<div class="form-group">
									<input type="email" class="form-control input-custom" id="thank-you-email" placeholder="Your Email">
								</div>
								<button class="btn btn-custom">
									<span class="unskew">
										<span class="text">Submit</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
		    </div>
	  	</div>
	</div>


	<div id="about-us-modal" class="modal modal-custom full fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
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



	<div id="previous-works-modal" class="modal modal-custom full fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
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

	<div id="news-and-gallery-modal" class="modal modal-custom full fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
					<div class="popup-header" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/header.jpg)">
						<div class="black-overlay"></div>
						<div class="popup-header-content">
							<h1>NEWS & GALLERY</h1>
							<h4>I don't want to do architecture that's dry and dull.</h4>
						</div>

						<div class="scroll-down-icon-wrapper">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon-white.png" class="scroll-down-icon" alt="Scroll Down">
							<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow-white.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
						</div>
					</div>
					<div class="popup-content padding">
						<div class="news-and-gallery-modal-main-thumbnail">
							<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-big.jpg)"></div>
						</div><!--
					 --><div class="news-and-gallery-modal-carousel-wrapper">
					 		<div class="news-and-gallery-modal-carousel">
								<div>
									<div class="thumbnail">
										<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-1.jpg)"></div>
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-2.jpg)"></div>
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-3.jpg)"></div>
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-4.jpg)"></div>
									</div>
								</div>
								<div>
									<div class="thumbnail">
										<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/news-and-gallery-modal/thumbnail-1.jpg)"></div>
									</div>
								</div>
					 		</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<h2>Otella as the Winner of Best Architecture 2018</h2>
								<hr class="short-line">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="news-and-gallery-modal-content">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
									<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="news-and-gallery-modal-content-share">
									<p>
										<span class="v-center">Share:</span><!--
									 --><span class="v-center">
									 		<i class="fa fa-twitter" aria-hidden="true"></i>
											<i class="fa fa-facebook" aria-hidden="true"></i>
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row margin-top-5">
							<div class="col-xs-12">
								<h2>News & Gallery You May Like</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="news-and-gallery-thumbnail similar normal">
									<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-1.jpg)">
										<div class="black-overlay bg">
											<div class="news-and-gallery-content">
												<h4>Otella as the Winner of Best Architecture 2018</h4>
												<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
												<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
													<span class="unskew">
														<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</button>
											</div>
										</div>
									</div>
				    			</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="news-and-gallery-thumbnail similar normal">
									<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-2.jpg)">
										<div class="black-overlay bg">
											<div class="news-and-gallery-content">
												<h4>Otella as the Winner of Best Architecture 2018</h4>
												<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
												<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
													<span class="unskew">
														<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</button>
											</div>
										</div>
									</div>
				    			</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="news-and-gallery-thumbnail similar normal">
									<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-3.jpg)">
										<div class="black-overlay bg">
											<div class="news-and-gallery-content">
												<h4>Otella as the Winner of Best Architecture 2018</h4>
												<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
												<button class="btn btn-custom inverted normal no-border no-padding" data-toggle="modal" data-target="#news-and-gallery-modal">
													<span class="unskew">
														<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
													</span>
												</button>
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

	<div id="career-detail-modal" class="modal modal-custom full fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body gradient">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>

					<div class="career-detail-popup-wrapper">
						<div class="row row-relative">
							<div class="career-detail-line"></div>
							<div class="col-xs-12 col-sm-6 career-detail-popup-left">
								<div class="career-detail-title-wrapper">
									<h1>CAREER</h1>
									<h2>ARCHITECT</h2>
								</div>
								<hr class="career-detail-line-title">
								<h3>Responsibilities</h3>
								<ul>
									<li>This is Photoshop's version  of Lorem Ipsum.</li>
									<li>Proin gravida nibh vel velit auctor aliquet. </li>
									<li>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit Consequat</li>
									<li>ipsum, nec sagittis sem nibh id elit</li>
									<li>Pliquam massa nisl qu</li>
								</ul>
								<h3>Requirements</h3>
								<ul>
									<li>This is Photoshop's version  of Lorem Ipsum.</li>
									<li>Proin gravida nibh vel velit auctor aliquet. </li>
									<li>Aenean sollicitudin, lorem quis bibendum auctor, nisi</li>
								</ul>
							</div>
							<div class="col-xs-12 col-sm-6 career-detail-popup-right">
								<img src="<?= base_url(); ?>assets/images/main/previous-work-supergraphic.png" alt="" class="career-detail-popup-supergraphic">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control input-custom" id="career-name" placeholder=" ">
											<label for="career-name">Name</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<input type="text" class="form-control input-custom" id="career-phone-number" placeholder=" ">
											<label for="career-phone-number">Phone Number</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<input type="email" class="form-control input-custom" id="career-email" placeholder=" ">
											<label for="career-email">Email</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="career-upload-cv" class="normal">Upload CV</label>
											<input type="file" class="form-control input-custom" id="career-upload-cv">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<button class="btn btn-custom">
											<span class="unskew">
												<span class="text">SUBMIT</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>
	  	</div>
	</div>

    <div id="services-modal" class="modal modal-custom full fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body">
					<button class="close-modal" data-dismiss="modal">
						<div class="close-icon">
							<span class="stripe"></span>
							<span class="stripe"></span>
						</div>
					</button>
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

<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/fullpage/javascript.fullPage.min.js"></script>
<script type="text/javascript">
	// mobile navigation
	var mobileNavigationToggle 	= document.querySelector('.mobile-menu-toggle');
	var mobileNavigationMenu	= document.querySelector('#navigation-mobile-menu');

	mobileNavigationToggle.addEventListener('click', function() {
		mobileNavigationMenu.classList.toggle('active');
	});


	document.addEventListener("DOMContentLoaded", function(event) {
	  // - Code to execute when all DOM content is loaded.
	  // - including fonts, images, etc.
		var documentWidth = document.documentElement.clientWidth;
		if (documentWidth > 767) {
			fullpage.initialize('#fullpage', {
				anchors: ['Header', 'PreviousWorks', 'AboutUs', 'NewsAndGallery','ContactUs', 'Career', 'Services'],
				css3:true,
				navigation: true,
				navigationPosition: 'left',
				navigationTooltips: ['Header', 'Previous Works', 'About Us', 'News and Gallery','Contact Us', 'Career', 'Services'],
				responsiveWidth: 768,
				onLeave: function(index, nextIndex, direction){
					changeNavbarColor(index, nextIndex, direction);
					changeNavbarActive(index, nextIndex, direction);
				}
			});
		}
	});


	function changeNavbarActive(index, nextIndex, direction) {
		var navbarLeftMenu 	= document.querySelectorAll('#navigation .navigation-left ul li');
		var navbarRightMenu = document.querySelectorAll('#navigation .navigation-right ul li');

		// if (nextIndex >=1 && nextIndex <=3) {
        if (nextIndex >=2 && nextIndex <=4) {
			navbarLeftMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
			navbarRightMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
			navbarLeftMenu[nextIndex-2].classList.add('active');
		}
		else if (nextIndex >=5 && nextIndex <=7){
			navbarLeftMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
			navbarRightMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
			navbarRightMenu[nextIndex-3-2].classList.add('active');
		}
        else {
            navbarLeftMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
			navbarRightMenu.forEach(
				function(item){
					item.classList.remove('active');
				}
			)
        }
	}

	function changeNavbarColor(index, nextIndex, direction) {
		if(nextIndex == 2 || nextIndex == 4) {
			document.querySelector('#navigation').classList.add("white");
			document.querySelector('.choose-language.desktop').classList.add("white");

			$('.navigation-logo').find('img').attr('src', '<?= base_url(); ?>assets/images/main/logo-white.png');
		}
		else {
			document.querySelector('#navigation').classList.remove("white");
			document.querySelector('.choose-language.desktop').classList.remove("white");

			$('.navigation-logo').find('img').attr('src', '<?= base_url(); ?>assets/images/main/logo.png');
		}

		if(nextIndex == 6) {
			document.querySelector('.social-media-icon-wrapper.desktop').classList.add("grey");
		}
		else {
			document.querySelector('.social-media-icon-wrapper.desktop').classList.remove("grey");
		}
	}
</script>

<!--[if (lt IE 9)]><script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.helper.ie8.js"></script><![endif]-->
<script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.js"></script>

<script type="text/javascript">
	var slider = tns({
		container: '.career-slider',
		fixedWidth: false,
		autoplay: false,
		mouseDrag: true,
		autoplayButtonOutput: false,
		controls: false,
		nav: false,
		swipeAngle: 60,
		responsive: {
			768: {
		    	fixedWidth: 320,
				autoplay: true
		    },
			1280: {
		    	fixedWidth: 340,
		    },
			1380: {
		    	fixedWidth: 380,
		    },
			1480: {
		    	fixedWidth: 420,
		    },
			1680: {
				fixedWidth: 490,
			}
		},
	});
</script>

<script type="text/javascript">
	var slider = tns({
		container: '.news-and-gallery-slider',
		autoplay: false,
		items: 1,
		mouseDrag: true,
		autoplayButtonOutput: false,
		controls: true,
		nav: false,
		swipeAngle: 60,
		controlsContainer: "#news-and-gallery-slider-custom-controls",
		responsive: {
			768: {
				items: 2
			},
			1080: {
		    	items: 3,
		    },
			1280: {
				items: 4
			}
		}
	});
</script>

<? $this->load->view('js'); ?>

<script type="text/javascript">
	$(window).load(function(){
		$('#initial-modal').modal('show');
		homeClick();
  	});
</script>


</html>
