<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0">
	<meta charset="utf-8">
	<meta name="description" content="">
    <meta name="author" content="">

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= base_url(); ?>images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= base_url(); ?>images/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= base_url(); ?>images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= base_url(); ?>images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= base_url(); ?>images/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?= base_url(); ?>images/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="<?= base_url(); ?>images/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?= base_url(); ?>images/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?= base_url(); ?>images/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?= base_url(); ?>images/favicon/mstile-310x310.png" />

	<script src="<?= base_url(); ?>js/jquery-2.1.4.min.js"></script>
	<script src="<?= base_url(); ?>js/number.min..js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>js/jquery.base64.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/semantic/dist/semantic.min.js"></script>
	<script src="<?= base_url(); ?>plugin/chart/dist/Chart.bundle.js"></script>
	<script src="<?= base_url(); ?>plugin/chart/dist/utils.js"></script>
	<script src="<?= base_url(); ?>plugin/semantic/dist/tablesort/jquery.tablesort.min.js"></script>

	<link href="<?= base_url(); ?>plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>plugin/semantic/dist/semantic.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>plugin/jqueryUI/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>plugin/chart/chart.min.js" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/core.css" rel="stylesheet" type="text/css">

	<title><?= $setting->setting__website_title; ?></title>

	<style type="text/css">
	</style>

	<script type="text/javascript">
		var windowWidth = $(window).width();
		var mobileWidth = 1024;

		$(function() {
			initResize();
			initClick();
			initSemantic();
		});

		$(window).on('resize', function(){
			initResize();
		});

		function initClick() {
			$('.option-menu').click(function() {
				if ($('.option-menu').hasClass('menu-active')) {
					$('.option-menu').removeClass('menu-active');

					$('.ui.vertical.menu').animate({
						left: '-240px',
					});

					if (windowWidth >= mobileWidth) {
						$('.main-content').animate({
							paddingLeft: '15px',
						});
					}

					$('.ui.fixed.menu').animate({
						paddingLeft: '0',
					});

					if (windowWidth < mobileWidth) {
						$('.option-right-account-menu').show();
					}
				}
				else {
					$('.option-menu').addClass('menu-active');

					$('.ui.vertical.menu').animate({
						left: '0',
					});

					if (windowWidth >= mobileWidth) {
						$('.main-content').animate({
							paddingLeft: '255px',
						});
					}

					$('.ui.fixed.menu').animate({
						paddingLeft: '240px',
					});

					if (windowWidth < mobileWidth) {
						$('.option-right-account-menu').hide();
					}
				}
			});

			$('.option-item-log').click(function() {
				$('.modal-log').modal({
					blurring: true,
					inverted: false,
				}).modal('setting', 'transition', 'scale').modal('show');
			});
		}

		function initResize() {
			windowWidth = $(window).width();

			if (windowWidth <= mobileWidth) {
				$('.option-menu').removeClass('menu-active');
				$('.ui.vertical.menu').css('left', '-240px');
				$('.main-content').css('padding-left', '15px');
				$('.ui.fixed.menu').css('padding-left', '0');
				$('.option-right-menu').hide();
			}
			else {
				$('.option-menu').addClass('menu-active');
				$('.ui.vertical.menu').css('left', '0');
				$('.main-content').css('padding-left', '255px');
				$('.ui.fixed.menu').css('padding-left', '240px');
				$('.option-right-menu').show();
				$('.option-right-account-menu').show();
			}
		}

		function initSemantic() {
			$('.html-dropdown-left-menu, .html-dropdown-top-menu').dropdown({
				action: 'hide',
			});

			$('.table-icon').popup();

			$('.ui.progress').progress({
				duration: 500,
				total: <?= $setting->system_memory_quota; ?>,
				text: {
					active: '{value}MB of {total}MB Used'
				}
			});
		}

		function isEmail(email) {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			return regex.test(email);
		}
	</script>
</head>

<body class="dashboard">
	<!--Dimmer-->
	<div class="ui dimmer all-loader">
		<div class="ui text loader">Loading</div>
	</div>

	<!-- Modal -->
	<div class="ui small inverted modal modal-log">
		<div class="image content" style="background-color: #fff; color: 2c2c2c;">
			<div class="description" style="text-align: center;">
				<img class="image" src="<?= base_url(); ?>images/admin/logo.png" style="height: 25%; padding-bottom: 10px;">
				<p class="font-bold font-big"><?= $setting->system_product_title; ?></p>
				<p class="font-bold font-big"><?= $setting->system_product_subtitle; ?></p>
				<p>V. <?= $setting->system_version; ?> <?= strtoupper($setting->system_product); ?></p>
				<p>Imagine by <a href="<?= $setting->system_vendor_link; ?>" style="color: 2c2c2c;"><?= $setting->system_vendor_name; ?></a></p>
				<p style="padding-top: 10px;">Credits:</p>
				<p><a href="mailto:rachel@labelideas.co" style="color: #2c2c2c;">Rachel Nathani (CEO / Founder)</a></p>
				<p><a href="mailto:vany@labelideas.co" style="color: #2c2c2c;">Vany Praisty (Account Manager)</a></p>
				<p><a href="mailto:lois@labelideas.co" style="color: #2c2c2c;">Lois Tornado(Digital Designer)</a></p>
				<p><a href="mailto:sugianto@labelideas.co" style="color: #2c2c2c;">Sugianto (Digital Development Manager)</a></p>
				<p><a href="mailto:christianto@labelideas.co" style="color: #2c2c2c;">Christianto Wijaya (Web & Apps Developer)</a></p>
			</div>
		</div>
	</div>

	<div class="ui basic modal all-error">
		<div class="ui icon header">WARNING</div>
		<div class="content">
			<div class="all-error-text"></div>
		</div>
		<div class="actions text-center">
			<div class="ui basic cancel inverted button">
				<i class="remove icon"></i>
				Return
			</div>
		</div>
	</div>

	<!-- Sidebar -->
	<div class="ui vertical menu">
		<div class="item" style="padding: 17.5px 15px;">
			<a href="<?= base_url(); ?>">
				<img style="width: 74%;" src="<?= base_url(); ?>images/admin/logo.png">
			</a>
		</div>
		<div class="item">
			Quick Access
			<div class="menu">
				<a href="<?= base_url(); ?>logout/" class="item">Logout</a>
				<a href="#" class="item">Refer to a Friend</a>
			</div>
		</div>

		<a href="<?= base_url(); ?>" class="<? if ($type == 'Dashboard'): ?>active<? endif; ?> item"><i class="grid layout icon"></i> Dashboard</a>

		<? if (isset($acl['website']) && $acl['website']->list > 0): ?>
			<div class="ui dropdown item html-dropdown-left-menu">
				Website <i class="dropdown icon"></i>
				<div class="menu">
					<a href="<?= base_url(); ?>header/view/1/" class="<? if ($type == 'Navigation'): ?>active<? endif; ?> item"><i class="sitemap icon"></i> Navigation</a>

					<a href="<?= base_url(); ?>metatag/view/1/" class="<? if ($type == 'Metatag'): ?>active<? endif; ?> item"><i class="at icon"></i> Meta Tag</a>

					<a href="<?= base_url(); ?>section/view/1/1/" class="<? if ($type == 'Section-1'): ?>active<? endif; ?> item"><i class="clone icon"></i> Home Page</a>
					<a href="<?= base_url(); ?>section/view/3/1/" class="<? if ($type == 'Section-3'): ?>active<? endif; ?> item"><i class="clone icon"></i> About Us Page</a>
					<a href="<?= base_url(); ?>section/view/4/1/" class="<? if ($type == 'Section-4'): ?>active<? endif; ?> item"><i class="clone icon"></i> News & Gallery Page</a>
					<a href="<?= base_url(); ?>section/view/7/1/" class="<? if ($type == 'Section-7'): ?>active<? endif; ?> item"><i class="clone icon"></i> Services Page</a>
				</div>
			</div>
		<? endif; ?>

		<? if (isset($acl['user']) && $acl['user']->list > 0): ?>
			<a href="<?= base_url(); ?>user/view/1/" class="<? if ($type == 'User'): ?>active<? endif; ?> item"><i class="users icon"></i> Users</a>
		<? endif; ?>

		<div class="ui dropdown item html-dropdown-left-menu">
			More <i class="dropdown icon"></i>
			<div class="menu">
				<? if (isset($acl['company_details']) && $acl['company_details']->edit > 0): ?>
					<a href="<?= base_url(); ?>setting/company/" class="<? if ($type == 'Company'): ?>active<? endif; ?> item"><i class="travel icon"></i> Company Details</a>
				<? endif; ?>

				<? if (isset($acl['setting']) && $acl['setting']->edit > 0): ?>
					<a href="<?= base_url(); ?>setting/" class="<? if ($type == 'Setting'): ?>active<? endif; ?> item"><i class="database icon"></i> Settings</a>
				<? endif; ?>

				<? if (isset($acl['system_log']) && $acl['system_log']->list > 0): ?>
					<a href="<?= base_url(); ?>log/view/1/" class="<? if ($type == 'Log'): ?>active<? endif; ?> item"><i class="clone icon"></i> System Log</a>
				<? endif; ?>

				<a class="item option-item-log"><i class="info icon"></i> About <?= $setting->system_product_title; ?> V <?= $setting->system_version; ?></a>
			</div>
		</div>
	</div>

	<div class="ui fixed menu top-menu">
		<div class="left menu">
			<div class="cursor-pointer item option-menu menu-active">
				<i class="options large icon no-margin"></i>
			</div>
		</div>
		<div class="right menu">
			<div class="item option-right-menu">
				<div class="ui small progress <? if (($total_size / $setting->system_memory_quota) * 100 >= 75): ?>error<? else: ?>success<? endif; ?>" data-value="<?= $total_size; ?>" data-total="<?= $setting->system_memory_quota; ?>">
					<div class="bar"></div>
					<div class="label"></div>
				</div>
			</div>
			<div class="item option-right-account-menu">
				<div class="ui dropdown html-dropdown-top-menu">
					<div class="text">
						<img class="ui avatar image" src="<?= base_url(); ?>/images/admin/users.png">
						<?= $account->name; ?>
					</div>
					<i class="dropdown icon"></i>
					<div class="menu">
						<a class="item" href="<?= base_url(); ?>user/account/"><i class="user icon"></i> Accounts</a>
						<a class="item" href="<?= base_url(); ?>logout/"><i class="sign out icon"></i> Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>