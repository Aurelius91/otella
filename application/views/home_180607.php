<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
    <div id="navigation">
    	<div class="navigation-left">
    		<ul class="menu-tes">
				<!-- 'Header', 'PreviousWorks', 'AboutUs', 'NewsAndGallery','ContactUs', 'Career' -->
    			<li data-menuanchor="Header"><a href="#Header"><span>SERVICES</span></a></li>
    			<li data-menuanchor="PreviousWorks"><a href="#PreviousWorks"><span>PORTFOLIO</span></a></li>
    			<li data-menuanchor="AboutUs"><a href="#AboutUs"><span>ABOUT US</span></a></li>
    		</ul>
    	</div><!--
	 --><div class="navigation-logo">
			<img src="<?= base_url(); ?>assets/images/main/logo.png" alt="Otella" class="logo">
		</div><!--
	 --><div class="navigation-right">
			<ul class="menu-tes">
				<li data-menuanchor="NewsAndGallery"><a href="#NewsAndGallery"><span>news & GALLERY</span></a></li>
				<li data-menuanchor="ContactUs"><a href="#ContactUs"><span>CONTACT US</span></a></li>
				<li data-menuanchor="Career"><a href="#Career"><span>CAREER</span></a></li>
			</ul>
		</div>
    </div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<div id="navigation-bottom">
		<div class="navigation-bottom-inner">
			<div class="choose-language">
				<ul>
					<li>EN</li>
					<li>ID</li>
				</ul>
			</div>
			<div class="scroll-down-icon-wrapper">
				<img src="<?= base_url(); ?>assets/images/main/scroll-down-icon.png" class="scroll-down-icon" alt="Scroll Down">
				<img src="<?= base_url(); ?>assets/images/main/scroll-down-arrow.png" class="scroll-down-icon-arrow scroll-down-animation" alt="Scroll Down">
			</div>
			<div class="social-media-icon-wrapper">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="side-menu hidden" id="consultant-side-menu">
		<button class="close-modal">
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
		<button class="close-modal">
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

            <!-- <div class="header-bg customer" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg.png)"></div> -->
			<!-- <div class="header-bg consultant" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg-consultant.png)"></div> -->
			<div class="header-bg supplier" style="background-image:url(<?= base_url(); ?>assets/images/main/header-bg-supplier.png)"></div>

    		<!-- <div class="section-content half less" id="customer-header-content">
    			<h1>FIND YOUR NEEDS</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom" data-toggle="modal" data-target="#find-my-needs-modal">
					<span class="unskew">
						<span class="text">Find my needs</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
					</span>
				</button>
    		</div> -->


			<!-- <div class="section-content half less" id="consultant-header-content">
    			<h1>consultant</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom btn-side-menu-toggle" data-target="#consultant-side-menu">
					<span class="unskew">
						<span class="text">I am interest to be consultant</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
					</span>
				</button>
    		</div> -->


			<div class="section-content half less" id="supplier-header-content">
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
					<ul class="cd-slider">
						<li class="visible" style="background-image:url(<?= base_url(); ?>assets/images/main/works-1.jpg)">
							<div class="black-overlay bg">
								<div class="previous-works-slider-content">
									<h2>RESIDENCE</h2>
									<button class="btn btn-custom transparent inverted normal no-border">
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
									<h2>OFFICE</h2>
									<button class="btn btn-custom transparent inverted normal no-border">
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
									<h2>STORE</h2>
									<button class="btn btn-custom transparent inverted normal no-border">
										<span class="unskew">
											See Project
										</span>
									</button>
								</div>
							</div>
						</li>
					</ul> <!-- .cd-slider -->

					<ol class="cd-slider-controls">
						<li class="selected"><a href="#"><em>Item 1</em></a></li>
						<li><a href="#"><em>Item 2</em></a></li>
						<li><a href="#"><em>Item 3</em></a></li>
					</ol> <!-- .cd-slider-controls -->

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
            <img src="<?= base_url(); ?>assets/images/main/about-us-bg.png" alt="" class="header-img">
    		<div class="section-content  half padding-left">
				<div class="section-title">
					<h1>Make the dreams of OTELLA best view of reality</h1>
				</div>
                <ul class="nav nav-tabs nav-tabs-custom">
                    <li class="active"><a data-toggle="tab" href="#abous-us-tabs">About Us</a></li>
                    <li><a data-toggle="tab" href="#history-tabs">History</a></li>
                    <li><a data-toggle="tab" href="#team-tabs">Team</a></li>
                </ul>

                <div class="tab-content">
                    <div id="abous-us-tabs" class="tab-pane tab-pane-custom fade in active">
                        <h3>About Us</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    </div>
                    <div id="history-tabs" class="tab-pane tab-pane-custom fade">
                        <h3>History</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    </div>
                    <div id="team-tabs" class="tab-pane tab-pane-custom fade">
                        <h3>Team</h3>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.aliquam massa nisl qu</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                    </div>
                </div>
    		</div>
    	</div>

    	<div class="section" id="news-and-gallery">
    		<div class="section-content no-padding">
				<div class="news-and-gallery-thumbnail">
					<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-1.jpg)">
						<div class="black-overlay bg">
							<div class="news-and-gallery-content">
								<h4>Otella as the Winner of Best Architecture 2018</h4>
								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
								<button class="btn btn-custom inverted normal no-border no-padding">
									<span class="unskew">
										<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
									</span>
								</button>
							</div>
						</div>
					</div>
    			</div>
				<div class="news-and-gallery-thumbnail">
					<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-2.jpg)">
						<div class="black-overlay bg">
							<div class="news-and-gallery-content">
								<h4>Otella as the Winner of Best Architecture 2018</h4>
								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
								<button class="btn btn-custom inverted normal no-border no-padding">
									<span class="unskew">
										<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
									</span>
								</button>
							</div>
						</div>
					</div>
    			</div>
				<div class="news-and-gallery-thumbnail">
					<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-3.jpg)">
						<div class="black-overlay bg">
							<div class="news-and-gallery-content">
								<h4>Otella as the Winner of Best Architecture 2018</h4>
								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
								<button class="btn btn-custom inverted normal no-border no-padding">
									<span class="unskew">
										<span class="text">Learn More</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg>
									</span>
								</button>
							</div>
						</div>
					</div>
    			</div>
				<div class="news-and-gallery-thumbnail">
					<div class="inner" style="background-image:url(<?= base_url(); ?>assets/images/main/news-4.jpg)">
						<div class="black-overlay bg">
							<div class="news-and-gallery-content">
								<h4>Otella as the Winner of Best Architecture 2018</h4>
								<p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris auctor eu in elit.</p>
								<button class="btn btn-custom inverted normal no-border no-padding">
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
								<button class="btn btn-custom inverted normal no-border no-padding">
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
								<button class="btn btn-custom inverted normal no-border no-padding">
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
								<button class="btn btn-custom inverted normal no-border no-padding">
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
								<button class="btn btn-custom inverted normal no-border no-padding">
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
										<button class="btn btn-custom">
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
										<button class="btn btn-custom">
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
										<button class="btn btn-custom">
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
										<button class="btn btn-custom">
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
										<button class="btn btn-custom">
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
    		</div>
    	</div>
    </div>

	<div id="initial-modal" class="modal modal-custom fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-content-inner">
					<div class="modal-body">
						<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin accumsan ipsum velit?</p>
						<div class="text-center">
							<div class="b2b-choice-wrapper">
								<button class="btn btn-custom min-width smaller-padding">
									<span class="unskew">
										B2B
									</span>
								</button>
								<div class="b2b-choice-option">
									<div class="line"></div>
									<button class="btn btn-custom min-width smaller-padding"><span class="unskew">Consultant</span></button>
									<button class="btn btn-custom min-width smaller-padding"><span class="unskew">Supplier</span></button>
								</div>
							</div>
							<button class="btn btn-custom min-width smaller-padding">
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
									<div class="col-xs-6">
										<div class="find-my-needs-thumbnail-1">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-1.jpg)">
												<div class="black-overlay lighter"></div>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="find-my-needs-thumbnail-1">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-2.jpg)">
												<div class="black-overlay lighter"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="find-my-needs-thumbnail-1">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-3.jpg)">
												<div class="black-overlay lighter"></div>
											</div>
										</div>
									</div>
									<div class="col-xs-6">
										<div class="find-my-needs-thumbnail-1">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-1-4.jpg)">
												<div class="black-overlay lighter"></div>
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
									<div class="col-xs-4">
										<div class="find-my-needs-thumbnail-2">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-1.jpg)">
												<div class="black-overlay lighter"></div>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="find-my-needs-thumbnail-2">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-2.jpg)">
												<div class="black-overlay lighter"></div>
											</div>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="find-my-needs-thumbnail-2">
											<div class="content-inside" style="background-image:url(<?= base_url(); ?>assets/images/main/question-2-3.jpg)">
												<div class="black-overlay lighter"></div>
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
					<div class="row row-eq-height">
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
</body>

<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/fullpage/javascript.fullPage.min.js"></script>
<script type="text/javascript">
	fullpage.initialize('#fullpage', {
		anchors: ['Header', 'PreviousWorks', 'AboutUs', 'NewsAndGallery','ContactUs', 'Career'],
		menu: '.menu-tes',
		css3:true,
		onLeave: function(index, nextIndex, direction){
			if(nextIndex == 2 || nextIndex == 4) {
				document.querySelector('#navigation').classList.add("white");
				document.querySelector('.choose-language').classList.add("white");
			}
			else {
				document.querySelector('#navigation').classList.remove("white");
				document.querySelector('.choose-language').classList.remove("white");
			}

			if(nextIndex == 6) {
				document.querySelector('.social-media-icon-wrapper').classList.add("grey");
			}
			else {
				document.querySelector('.social-media-icon-wrapper').classList.remove("grey");
			}
		},
	});
</script>

<!--[if (lt IE 9)]><script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.helper.ie8.js"></script><![endif]-->
<script src="<?= base_url(); ?>assets/plugin/tinyslider/tiny-slider.js"></script>

<script type="text/javascript">
	var slider = tns({
		container: '.career-slider',
		fixedWidth: 490,
		autoplay: true,
		mouseDrag: true,
		autoplayButtonOutput: false,
		controls: false,
		nav: false,
		swipeAngle: 60,
		responsive: {
			1080: {
		    	fixedWidth: 320,
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

<? $this->load->view('js'); ?>

<script type="text/javascript">
	var findMyNeedsSlider;
	// $(window).load(function(){
	// 	 $('#initial-modal').modal('show');
  	// });

	function initSlider() {
		var slider2 = tns({
			container: '.find-my-needs-slider',
			autoplay: false,
			items: 1,
			mouseDrag: false,
			autoplayButtonOutput: false,
			controls: false,
			nav: false,
			loop: false
		});

		findMyNeedsSlider = slider2;
	}

	$('#find-my-needs-modal').on('shown.bs.modal', function (e) {
		setTimeout(initSlider(), 1000)
	})

	$('#find-my-needs-modal').on('hidden.bs.modal', function () {
		findMyNeedsSlider.destroy();
	})

	$('.find-my-needs-next').on('click', function () {
		findMyNeedsSlider.goTo('next');
	})

	$('.find-my-needs-prev').on('click', function () {
		findMyNeedsSlider.goTo('prev');
	})

	$('#find-my-needs-final').on('click', function () {
		$('#find-my-needs-modal').modal('hide');
		$('#thank-you-modal').modal('show');
	})
</script>

<script>
	$('#header .section-content button.btn-custom').on('click', function(event) {
		var target = $(this).data('target');
		$(target).toggleClass('active');
	})

	$(document).on('click', function(event) {
		if (!$(event.target).closest('.side-menu').length && !$(event.target).closest('#header .section-content button.btn-custom').length) {
	    	$('.side-menu').removeClass('active');
	  	}
	});
</script>

</html>
