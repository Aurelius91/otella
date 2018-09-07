<!DOCTYPE html>
<html lang="en">
<head>
    <? $this->load->view('header'); ?>
    <? $this->load->view('custom-style'); ?>
</head>

<body>
	<div id="career-detail-modal" class="modal-custom full fade in" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-body gradient">
					<a href="<?= base_url(); ?>">
						<button class="close-modal">
							<div class="close-icon">
								<span class="stripe"></span>
								<span class="stripe"></span>
							</div>
						</button>
					</a>

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
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>if (!window.jQuery) { document.write('<script src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"><\/script>'); }</script>
<!-- <script src="<?= base_url(); ?>assets/plugin/bootstrap/js/bootstrap-custom.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" async defer></script>

</html>
