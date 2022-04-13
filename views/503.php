<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title>Welcome to MY Compliance Management</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">

	<?PHP echo Asset::css('font-awesome.min.css') ?>
	<?PHP echo Asset::css('jquery-ui.min.css') ?>
	<?PHP echo Asset::css('bootstrap.min.css') ?>
	<?PHP echo Asset::css('toastr.min.css'); ?>
	<?PHP echo Session::get('subdomain') ? Asset::css('resellers/'.Session::get('subdomain').'/mvpready-admin.css') : Asset::css('mvpready-admin.css'); ?>

	<link rel="shortcut icon" href="<?PHP echo Uri::base().'favicon.ico' ?>">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
	<?PHP echo Asset::js('jquery-3.5.0.min.js') ?>
	<?PHP echo Asset::js('bootstrap.min.js') ?>
	<?PHP echo Asset::js('jquery-ui.min.js') ?>
</head>
<body class="account-bg">
<header class="navbar navbar-inverse" role="banner">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-cog"></i>
			</button>

			<a href="/" class="navbar-brand navbar-brand-img">
				<?PHP $logo = Session::get('subdomain') ? 'resellers/'.Session::get('subdomain').'/logo.png' : 'logo.png';
				echo Asset::img($logo); ?>
			</a>
		</div>
	</div>
</header>

<div class="account-wrapper" style="width:80%; max-width:600px;">
	<div class="account-body">
		<h3>Welcome to
			<?PHP $logo = Session::get('subdomain') ? 'resellers/'.Session::get('subdomain').'/logo.png' : 'logo-small-full.png';
			echo Asset::img($logo, ['height' => 25]); ?></h3>
		<h2>We're making some updates!</h2>
		<h3>We are just making some changes to your system to make it better and it will be back shortly.</h3>
	</div>
</div>

<?PHP echo Asset::js('jquery-3.5.1.min.js') ?>
<?PHP echo Asset::js('libs/bootstrap.min.js') ?>

<!--[if lt IE 9]><?PHP echo Asset::js('libs/excanvas.compiled.js')?><![endif]-->

<?PHP echo Asset::js('mvpready-core.js') ?>
<?PHP echo Asset::js('mvpready-admin.js') ?>

<?PHP echo Asset::js('mvpready-account.js') ?>

</body>
</html>
