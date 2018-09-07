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

			$('#setting-website-maintenance-container').dropdown('set selected', "<?= $setting->setting__system_main_website_maintenance; ?>");

			$('#setting-dual-language-container').dropdown('set selected', "<?= $setting->setting__website_enabled_dual_language; ?>");
			$('#setting-language-1').val("<?= $setting->setting__system_language; ?>");
			$('#setting-language-2').val("<?= $setting->setting__system_language2; ?>");
		}

		function submit() {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			var emailSentTo = $('#setting-email-sent-to').val();
			var emailSentCC = $('#setting-email-sent-cc').val();

			var settingEnabledWebsiteMaintenance = $('#setting-enabled-website-maintenance').val();
			var settingEnabledDualLanguage = $('#setting-enabled-dual-language').val();
			var settingLanguage1 = $('#setting-language-1').val();
			var settingLanguage2 = $('#setting-language-2').val();

			$.ajax({
				data :{
					system_email_send_to: emailSentTo,
					system_email_send_cc: emailSentCC,
					setting__website_enabled_dual_language: settingEnabledDualLanguage,
					setting__system_language: settingLanguage1,
					setting__system_language2: settingLanguage2,
					setting__system_main_website_maintenance: settingEnabledWebsiteMaintenance,
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
						</div>

						<h4 class="ui dividing header">Enquiry Email Settings</h4>
						<!-- General -->
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>General Email Sent To</label>
									<input id="setting-email-sent-to" class="form-input" placeholder="General Email Sent To.." type="text">
								</div>
								<div class="field">
									<label>General Email Sent CC (separated by ';')</label>
									<input id="setting-email-sent-cc" class="form-input" placeholder="General Email Sent CC.." type="text">
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