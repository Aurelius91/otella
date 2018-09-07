<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
    <div class="asd">asdasd</div>
    <div id="fullpage">
    	<div class="section" id="header">
            <img src="<?= base_url(); ?>assets/images/main/supergraphic.png" alt="" class="supergraphic">
            <div class="header-bg"></div>
    		<div class="section-content half less">
    			<h1>FIND YOUR NEEDS</h1>
                <h3>Be inspired, be you</h3>
    			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                <button class="btn btn-custom"><span>Find my needs</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg></button>
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
		<!-- <svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 126.5 113"  xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
			<g>
				<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
					<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
				</clipPath>
			</g>
			<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?= base_url(); ?>assets/images/main/news-1.jpg" />
		</svg> -->
    	<div class="section" id="news-and-gallery">
    		<div class="section-content no-padding">
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="https://unsplash.it/1400/750?image=667" />
						</svg>
					</div>
    			</div>
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="https://unsplash.it/1400/750?image=667" />
						</svg>
					</div>
    			</div>
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="https://unsplash.it/1400/750?image=667" />
						</svg>
					</div>
    			</div>
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="xMidYMid slice" xlink:href="https://unsplash.it/1400/750?image=667" />
						</svg>
					</div>
    			</div>
    			<!-- <div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 126.5 113"  xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-inverted" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-inverted)" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?= base_url(); ?>assets/images/main/news-5.jpg" />
						</svg>
					</div>
    			</div> -->
    			<!-- <div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 126.5 100"  xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?= base_url(); ?>assets/images/main/news-6.jpg" />
						</svg>
					</div>
    			</div>
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 126.5 100"  xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?= base_url(); ?>assets/images/main/news-7.jpg" />
						</svg>
					</div>
    			</div>
    			<div class="news-and-gallery-thumbnail">
					<div class="inner">
						<svg class="svg-graphic" height="100%" width="100%" viewBox="0 0 126.5 100"  xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
							<g>
								<clipPath id="hexagonal-mask" clipPathUnits="objectBoundingBox">
									<polygon points="0 1, 0.1 0, 1 0,0.9 1" />
								</clipPath>
							</g>
							<image clip-path="url(#hexagonal-mask)" height="100%" width="100%" preserveAspectRatio="none" xlink:href="<?= base_url(); ?>assets/images/main/news-8.jpg" />
						</svg>
					</div>
    			</div> -->
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
						<button class="btn btn-custom"><span>Submit</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49" enable-background="new 0 0 31.49 31.49"><path d="M21.205 5.007c-.429-.444-1.143-.444-1.587 0-.429.429-.429 1.143 0 1.571l8.047 8.047h-26.554c-.619.001-1.111.493-1.111 1.112 0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587.444.444 1.159.444 1.587 0l9.952-9.952c.444-.429.444-1.143 0-1.571l-9.952-9.953z" fill="#fff"/></svg></button>
					</div>
				</div>
    		</div>
    	</div>
    </div>
</body>

<script type="text/javascript" src="<?= base_url(); ?>assets/plugin/fullpage/javascript.fullPage.min.js"></script>
<script type="text/javascript">
	fullpage.initialize('#fullpage', {
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
		menu: '#menu',
		css3:true
	});
</script>

<? $this->load->view('js'); ?>

</html>
