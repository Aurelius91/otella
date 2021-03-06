	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			click();
			init();
			reset();
		});

		function click() {
			$('#form-back').click(function() {
				window.location.href = '<?= base_url(); ?>';
			});

			$('#form-submit').click(function() {
				submit();
			});
		}

		function init() {
			$('.ui.search.dropdown.form-input').dropdown('clear');
		}

		function reset() {
			$('#setting-email-sent-to').val("<?= $setting->system_email_send_to; ?>");
			$('#setting-email-sent-cc').val("<?= $setting->system_email_send_cc; ?>");
			$('#setting-email-sent2-to').val("<?= $setting->system_email_send2_to; ?>");
			$('#setting-email-sent2-cc').val("<?= $setting->system_email_send2_cc; ?>");
			$('#setting-email-sent3-to').val("<?= $setting->system_email_send3_to; ?>");
			$('#setting-email-sent3-cc').val("<?= $setting->system_email_send3_cc; ?>");
			$('#setting-email-sent4-to').val("<?= $setting->system_email_send4_to; ?>");
			$('#setting-email-sent4-cc').val("<?= $setting->system_email_send4_cc; ?>");
			$('#setting-email-sent5-to').val("<?= $setting->system_email_send5_to; ?>");
			$('#setting-email-sent5-cc').val("<?= $setting->system_email_send5_cc; ?>");

			$('#setting-website-maintenance-container').dropdown('set selected', "<?= $setting->setting__system_main_website_maintenance; ?>");

			$('#setting-dual-language-container').dropdown('set selected', "<?= $setting->setting__website_enabled_dual_language; ?>");
			$('#setting-language-1').val("<?= $setting->setting__system_language; ?>");
			$('#setting-language-2').val("<?= $setting->setting__system_language2; ?>");

			$('#setting-search-function-container').dropdown('set selected', "<?= $setting->setting__system_main_search_function; ?>");
		}

		function submit() {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			var emailSentTo = $('#setting-email-sent-to').val();
			var emailSentCC = $('#setting-email-sent-cc').val();
			var emailSent2To = $('#setting-email-sent2-to').val();
			var emailSent2CC = $('#setting-email-sent2-cc').val();
			var emailSent3To = $('#setting-email-sent3-to').val();
			var emailSent3CC = $('#setting-email-sent3-cc').val();
			var emailSent4To = $('#setting-email-sent4-to').val();
			var emailSent4CC = $('#setting-email-sent4-cc').val();
			var emailSent5To = $('#setting-email-sent5-to').val();
			var emailSent5CC = $('#setting-email-sent5-cc').val();

			var settingEnabledWebsiteMaintenance = $('#setting-enabled-website-maintenance').val();
			var settingEnabledDualLanguage = $('#setting-enabled-dual-language').val();
			var settingLanguage1 = $('#setting-language-1').val();
			var settingLanguage2 = $('#setting-language-2').val();

			var settingEnabledSearchFunction = $('#setting-enabled-search-function').val();

			$.ajax({
				data :{
					system_email_send_to: emailSentTo,
					system_email_send_cc: emailSentCC,
					system_email_send2_to: emailSent2To,
					system_email_send2_cc: emailSent2CC,
					system_email_send3_to: emailSent3To,
					system_email_send3_cc: emailSent3CC,
					system_email_send4_to: emailSent4To,
					system_email_send4_cc: emailSent4CC,
					system_email_send5_to: emailSent5To,
					system_email_send5_cc: emailSent5CC,
					setting__website_enabled_dual_language: settingEnabledDualLanguage,
					setting__system_language: settingLanguage1,
					setting__system_language2: settingLanguage2,
					setting__system_main_website_maintenance: settingEnabledWebsiteMaintenance,
					setting__system_main_search_function: settingEnabledSearchFunction,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					$('.ui.dimmer.all-loader').dimmer('hide');
					$('.ui.basic.modal.all-error').modal('show');
					$('.all-error-text').html('Server Error.');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.ui.text.loader').html('Refreshing your page...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>setting/ajax_update/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Checking Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Updating Database...');
					}, false);

					return xhr;
				},
			});
		}
	</script>

	<!-- Dashboard Here -->
	<div class="main-content">
		<div class="ui stackable one column centered grid">
			<div class="column">
				<div class="ui attached message setting-header">
					<div class="header">System Settings</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">Website Settings</h4>
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Enabled Website Maintenance</label>
									<div id="setting-website-maintenance-container" class="ui search selection dropdown form-input">
										<input id="setting-enabled-website-maintenance" type="hidden">
										<i class="dropdown icon"></i>
										<div class="default text">-- Enabled Website Maintenance --</div>
										<div class="menu">
											<div class="item" data-value="1">Enabled</div>
											<div class="item" data-value="0">Disabled</div>
										</div>
									</div>
								</div>
								<div class="field">
									<label>Enabled Dual Language</label>
									<div id="setting-dual-language-container" class="ui search selection dropdown form-input">
										<input id="setting-enabled-dual-language" type="hidden">
										<i class="dropdown icon"></i>
										<div class="default text">-- Enabled Dual Language --</div>
										<div class="menu">
											<div class="item" data-value="1">Enabled</div>
											<div class="item" data-value="0">Disabled</div>
										</div>
									</div>
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<label>Main Language Name</label>
									<input id="setting-language-1" class="form-input" placeholder="Main Language Name.." type="text">
								</div>
								<div class="field">
									<label>Optional Language Name</label>
									<input id="setting-language-2" class="form-input" placeholder="Optional Language Name.." type="text">
								</div>
							</div>

							<div class="two fields">
								<div class="field">
									<label>Enabled Search Function</label>
									<div id="setting-search-function-container" class="ui search selection dropdown form-input">
										<input id="setting-enabled-search-function" type="hidden">
										<i class="dropdown icon"></i>
										<div class="default text">-- Enabled Search Function --</div>
										<div class="menu">
											<div class="item" data-value="1">Enabled</div>
											<div class="item" data-value="0">Disabled</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">General Inquiry Email Settings</h4>
						<!-- General -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>General Inquiry Email Sent To</label>
									<input id="setting-email-sent-to" class="form-input" placeholder="General Inquiry Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>General Inquiry Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent-cc" class="form-input" placeholder="General Inquiry Email Sent CC.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">End Customer Inquiry Email Settings</h4>
						<!-- End Customer Inquiry -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>End Customer Inquiry Email Sent To</label>
									<input id="setting-email-sent2-to" class="form-input" placeholder="End Customer Inquiry Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>End Customer Inquiry Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent2-cc" class="form-input" placeholder="End Customer Inquiry Email Sent CC.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">Consultant Inquiry Email Settings</h4>
						<!-- Consultant Inquiry -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Consultant Inquiry Email Sent To</label>
									<input id="setting-email-sent3-to" class="form-input" placeholder="Consultant Inquiry Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>Consultant Inquiry Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent3-cc" class="form-input" placeholder="Consultant Inquiry Email Sent CC.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">Supplier Inquiry Email Settings</h4>
						<!-- Supplier Inquiry -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Supplier Inquiry Email Sent To</label>
									<input id="setting-email-sent4-to" class="form-input" placeholder="Supplier Inquiry Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>Supplier Inquiry Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent4-cc" class="form-input" placeholder="Supplier Inquiry Email Sent CC.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">Career Inquiry Email Settings</h4>
						<!-- Career Inquiry -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Career Inquiry Email Sent To</label>
									<input id="setting-email-sent5-to" class="form-input" placeholder="Career Inquiry Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>Career Inquiry Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent5-cc" class="form-input" placeholder="Career Inquiry Email Sent CC.." type="text">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui bottom attached message text-right setting-header">
					<div class="ui buttons">
						<button id="form-back" class="ui left attached button form-button">Back</button>
						<button id="form-submit" class="ui right attached button form-button">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>