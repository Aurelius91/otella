	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			click();
			init();
			reset();
			change();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>user/view/1/';
		}

		function change() {
			$('.checkbox-check-all').change(function() {
				if ($('.checkbox-check-all').prop('checked') == true) {
					$('.checkbox-list').prop('checked', true);
					$('.checkbox-add').prop('checked', true);
					$('.checkbox-edit').prop('checked', true);
					$('.checkbox-delete').prop('checked', true);
				}
				else {
					$('.checkbox-list').prop('checked', false);
					$('.checkbox-add').prop('checked', false);
					$('.checkbox-edit').prop('checked', false);
					$('.checkbox-delete').prop('checked', false);
				}
			});

			$('.checkbox-list, .checkbox-add, .checkbox-edit, .checkbox-delete').change(function() {
				$('.checkbox-check-all').prop('checked', false);
			});
		}

		function click() {
			$('#form-back').click(function() {
				back();
			});

			$('#form-submit').click(function() {
				submit();
			});

			$('.form-input').click(function() {
				$(this).removeClass('input-error');
			});

			$('#form-user-access-add').click(function() {
				$('.ui.modal.user-access-modal').modal('hide');
			});

			$('.user-access-button').click(function() {
				$('.ui.modal.user-access-modal').modal({
					inverted: false,
				}).modal('show');
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#user-address',
				height: 300,
				width: '100%',
				plugins: ["advlist autolink lists link charmap preview", "searchreplace visualblocks code", "table contextmenu paste"],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
				paste_as_text: true
			});

			$('.ui.search.dropdown.form-input').dropdown('clear');
		}

		function reset() {
			$('#user-name').val("");
			$('#user-position').val("");
			$('#user-address').val("");
			$('#user-phone').val("");
			$('#user-email').val("");
			$('#user-username').val("");
			$('#user-password').val("");

			$('#user-location').val('0');
			$('#user-location-container').dropdown('set selected', "0");

			$('#user-type').val('Admin');
			$('#user-type-container').dropdown('set selected', "Admin");

			$('.checkbox-check-all').prop('checked', false);
			$('.checkbox-list').prop('checked', false);
			$('.checkbox-add').prop('checked', false);
			$('.checkbox-edit').prop('checked', false);
			$('.checkbox-delete').prop('checked', false);
		}

		function submit() {
			var userName = $('#user-name').val();
			var userPosition = $('#user-position').val();
			var userAddress = tinyMCE.get('user-address').getContent();
			var userPhone = $('#user-phone').val();
			var userEmail = $('#user-email').val();
			var userUsername = $('#user-username').val();
			var userPassword = $('#user-password').val();
			var userLocationId = $('#user-location').val();
			var userType = $('#user-type').val();
			var found = 0;

			$.each($('.data-important'), function(key, data) {
				if ($(data).val() == '') {
					found += 1;

					$(data).addClass('input-error');
				}
			});

			/* Get User Access Value */
			var arrUserAccess = [];
			var userAccess = {};

			$.each($('.module-list'), function(key, tr) {
				userAccess = {};

				userAccess.module_id = $(tr).attr('data-module-id');
				userAccess.list = ($('#module-'+ $(tr).attr('data-module-id') +'-list').is(":checked")) ? 1 : 0;
				userAccess.add = ($('#module-'+ $(tr).attr('data-module-id') +'-add').is(":checked")) ? 1 : 0;
				userAccess.edit = ($('#module-'+ $(tr).attr('data-module-id') +'-edit').is(":checked")) ? 1 : 0;
				userAccess.delete = ($('#module-'+ $(tr).attr('data-module-id') +'-delete').is(":checked")) ? 1 : 0;

				arrUserAccess.push(userAccess);
			});

			if (found > 0) {
				return;
			}

			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					location_id: userLocationId,
					type: userType,
					name: userName,
					position: userPosition,
					address: userAddress,
					phone: userPhone,
					email: userEmail,
					username: userUsername,
					password: userPassword,
					user_access_user_access: JSON.stringify(arrUserAccess),
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
						$('.ui.text.loader').html('Redirecting...');

						back();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>user/ajax_add/',
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

	<!-- User Access Modal -->
	<div class="ui modal user-access-modal">
		<i class="close icon"></i>
		<div class="header">Manage User Access</div>
		<div class="user-access-list content">
			<div>
				<table class="ui selectable celled table">
					<thead>
						<tr>
							<th class="width-40-percent">Module Name</th>
							<th class="width-15-percent text-center">List</th>
							<th class="width-15-percent text-center">Add</th>
							<th class="width-15-percent text-center">Edit</th>
							<th class="width-15-percent text-center">Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="5" class="font-bold">
								<div class="ui slider checkbox">
									<input type="checkbox" class="checkbox-check-all"> <label>Check All</label>
								</div>
							</td>
						</tr>
						<? foreach ($arr_module as $key => $modules): ?>
							<tr>
								<td colspan="5" class="font-bold"><?= $key; ?></td>
							</tr>
							<? foreach ($modules as $module): ?>
								<tr class="module-list" data-module-id="<?= $module->id; ?>">
									<td class="width-40-percent"><?= $module->name; ?></td>
									<td class="width-15-percent text-center">
										<? if ($module->list > 0): ?>
											<div class="ui fitted slider checkbox">
												<input id="module-<?= $module->id; ?>-list" type="checkbox" class="checkbox-list"> <label></label>
											</div>
										<? endif; ?>
									</td>
									<td class="width-15-percent text-center">
										<? if ($module->add > 0): ?>
											<div class="ui fitted slider checkbox">
												<input id="module-<?= $module->id; ?>-add" type="checkbox" class="checkbox-add"> <label></label>
											</div>
										<? endif; ?>
									</td>
									<td class="width-15-percent text-center">
										<? if ($module->edit > 0): ?>
											<div class="ui fitted slider checkbox">
												<input id="module-<?= $module->id; ?>-edit" type="checkbox" class="checkbox-edit"> <label></label>
											</div>
										<? endif; ?>
									</td>
									<td class="width-15-percent text-center">
										<? if ($module->delete > 0): ?>
											<div class="ui fitted slider checkbox">
												<input id="module-<?= $module->id; ?>-delete" type="checkbox" class="checkbox-delete"> <label></label>
											</div>
										<? endif; ?>
									</td>
								</tr>
							<? endforeach; ?>
						<? endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="actions text-center">
				<div id="form-user-access-add" class="ui button form-button">Submit</div>
			</div>
		</div>
	</div>

	<div class="main-content">
		<div class="ui stackable one column centered grid">
			<div class="column">
				<div class="ui attached message setting-header">
					<div class="header">Add New User</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">Personal Details</h4>
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Name <span class="color-red">*</span></label>
									<input id="user-name" class="form-input data-important" placeholder="Name.." type="text">
								</div>
								<div class="field">
									<label>Position</label>
									<input id="user-position" class="form-input" placeholder="Position.." type="text">
								</div>
							</div>
							<div class="two fields">
								<div class="field">
									<label>Location</label>
									<div id="user-location-container" class="ui search selection dropdown form-input">
										<input id="user-location" type="hidden">
										<i class="dropdown icon"></i>
										<div class="default text">-- Select Location --</div>
										<div class="menu">
											<div class="item" data-value="0">All Location</div>

											<? foreach ($arr_location as $location): ?>
												<div class="item" data-value="<?= $location->id; ?>"><?= $location->name; ?></div>
											<? endforeach; ?>
										</div>
									</div>
								</div>
								<div class="field">
									<label>User Type</label>
									<div id="user-type-container" class="ui search selection dropdown form-input">
										<input id="user-type" type="hidden">
										<i class="dropdown icon"></i>
										<div class="default text">-- Select Type --</div>
										<div class="menu">
											<div class="item" data-value="Admin">Admin</div>
											<div class="item" data-value="Cashier">Cashier</div>
										</div>
									</div>
								</div>
							</div>
							<div class="field">
								<label>Address</label>
								<textarea id="user-address" placeholder="Address.."></textarea>
							</div>
							<div class="two fields">
								<div class="field">
									<label>Phone</label>
									<input id="user-phone" class="form-input" placeholder="Phone.." type="text">
								</div>
								<div class="field">
									<label>Email</label>
									<input id="user-email" class="form-input" placeholder="Email.." type="text">
								</div>
							</div>
						</div>

						<h4 class="ui dividing header">Account Details</h4>
						<div class="field">
							<div class="two fields">
								<div class="field">
									<label>Username</label>
									<input id="user-username" class="form-input" placeholder="Username.." type="text">
								</div>
								<div class="field">
									<label>Password</label>
									<input id="user-password" class="form-input" placeholder="Password.." type="password">
								</div>
							</div>
						</div>

						<div class="field">
							<button class="ui button user-access-button">Add User Access</button>
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