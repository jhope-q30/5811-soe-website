<?php
define("docroot", "/5811-soe-website/");
$page_title = !isset($page_title) ? "Save on Energy" : "Save on Energy: " . $page_title;
$body_class = !isset($body_class) ? "home" : $body_class;
function __toplevelactive( $link ){
	global $body_class;
	if( $body_class == $link ){
		return "active";
	}
	return "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $page_title; ?></title>
<!-- Font css -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Lora:400|Barlow+Semi+Condensed:400,500" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="<?php echo docroot; ?>css/default.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo docroot; ?>assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/velocity/1.4.1/velocity.min.js"></script>
<script src="<?php echo docroot; ?>js/menubar.js"></script>
</head>
<body class="<?php echo $body_class; ?>">
<div class="soe-content">
<header id="soe-head" class="soe-layout-container" role="banner">
	<a href="#main" class="skip">Skip to content</a>
	<nav class="navbar navbar-default">
		<div class="soe-top-nav">
			<div class="container-fluid soe-container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">FR</a></li>
					<li><a href="#">Contact</a></li>
					<li>
						<a href="#" type="button" class="soe-search-btn" data-toggle="collapse" id="openSearchBtn" data-target="#openSearch" aria-expanded="false" aria-controls="openSearch">
							<img src="<?php echo docroot; ?>img/icon-search.svg" alt="search">
						</a>
					</li>
				</ul>
			</div>
			<div class="collapse soe-search-nav" id="openSearch">
				<div class="container-fluid soe-container-fluid">
					<form class="navbar-form navbar-right soe-input-layout">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="What are you looking for?">
							<span class="input-group-btn">
								<button class="btn btn-default soe-search-btn" type="button">Go!</button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="soe-main-nav" role="navigation" aria-label="Main menu">
			<div class="container-fluid soe-container-fluid">
				<div class="navbar-header">
					<a type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#soe-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						Menu <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
					</a>
					<a class="navbar-brand soe-logo" href="<?php echo docroot; ?>">
						<img src="<?php echo docroot; ?>img/soe-logo.svg" alt="saveonenergy.ca">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="soe-navbar-collapse-1">
					<div class="visible-xs">
						<ul class="nav navbar-nav soe-mobile-nav-top">
							<li><a href="#">FR</a></li>
							<li><a href="#">Contact</a></li>
							<li>
								<a href="#" type="button" class="soe-search-btn" data-toggle="collapse" id="openSearchBtnMobile" data-target="#openSearchMobile" aria-expanded="false" aria-controls="openSearchMobile">
									<img src="<?php echo docroot; ?>img/icon-search.svg" alt="search">
								</a>
							</li>
						</ul>
						<div class="collapse" id="openSearchMobile">
							<div class="container">
								<form class="navbar-form soe-input-layout">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="What are you looking for?">
										<span class="input-group-btn">
											<button class="btn btn-default soe-search-btn" type="button">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
					<ul id="nav" class="nav navbar-nav navbar-right soe-right-nav menubar root-level" role="menubar">
						<li class="dropdown menu-parent for-your-home <?php echo __toplevelactive( 'for-your-home' ); ?> fluid" role="menu" tabindex="0" aria-haspopup="true" title="For your Home menu">
							<a href="#" role="menuitem" class="menu-item" tabindex="-1"><span class="soe-nav-break">Rabais Énergétiques</span></a>
							<ul class="dropdown-menu" role="menu" aria-hidden="true">
								<li role="menuitem" class="menu-item" tabindex="-1"><a href="#">L’efficacité énergétique dans toute la maison</a></li>
								<li role="menuitem" class="menu-item" tabindex="-1"><a href="#">Chauffage et climatisation</a></li>
								<li role="menuitem" class="menu-item" tabindex="-1"><a href="#">Jours à Rabais</a></li>
							</ul>
						</li>
						<li class="dropdown menu-parent for-your-small-business <?php echo __toplevelactive( 'for-your-small-business' ); ?> fluid" role="menu" tabindex="0" aria-haspopup="true" title="For your Small Business menu">
							<a href="#" role="menuitem" tabindex="-1"><span class="soe-nav-break">Astuces et Conseils</span></a>
						</li>
						<li class="dropdown menu-parent for-industry-and-large-business <?php echo __toplevelactive( 'for-industry-and-large-business' ); ?> fluid" role="menu" tabindex="0" aria-haspopup="true" title="For Industry & Large Business menu">
							<a href="<?php echo docroot; ?>for-industry-large-business/" role="menuitem" tabindex="-1"><span class="soe-nav-break">Aide Résidentielle</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
</header>
<a name="main" id="main" tabindex="-1"></a>


<footer id="soe-footer" role="banner">
	<div class="container">
		<div class="soe-footer-container">
			<div class="row">
				<div class="col-sm-4 col-md-6">
					<a href="<?php echo docroot; ?>" class="soe-logo">
						<img src="<?php echo docroot; ?>img/soe-logo-fr.svg">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="soe-footer-container soe-nopad-top">
			<div class="row soe-border-top soe-border-bottom">
				<div class="col-sm-8">
					<nav class="soe-footer-nav">
						<ul class="nav navbar-nav soe-footer-nav-left">
							<li><a href="#">Options pour votre maison</a></li>
							<li><a href="#">Aide a faible revenu</a></li>
							<li><a href="#">Conseil et technologie</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-4 soe-border-left">
					<nav class="soe-footer-nav soe-layout-container">
						<ul class="nav navbar-nav soe-footer-nav-right">
							<li><a href="#">saveonenergy.ca</a></li>
							<li><a href="#">ieso.ca</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="soe-footer-container soe-nopad-top">
			<div class="row">
				<div class="col-sm-6">
					<div class="soe-layout-container">
						<ul class="soe-footers-share">
							<li><a href="#" title="facebook"><img src="<?php echo docroot; ?>img/footer-facebook.svg" alt="facebook"></a></li>
							<li><a href="#" title="twitter"><img src="<?php echo docroot; ?>img/footer-twitter.svg" alt="twitter"></a></li>
							<li><a href="#" title="youtube"><img src="<?php echo docroot; ?>img/footer-youtube.svg" alt="youtube"></a></li>
							<li><a href="#" title="linkedin"><img src="<?php echo docroot; ?>img/footer-linkedin.svg" alt="linkedin"></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<p class="text-right"><small><a href="#">Accessibilité</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Politique de confidentialité</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Conditions d'utilisation</a></small></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="soe-footer-container soe-nopad-top">
			<p><small>&copy; Copyright and trademark information</small></p>
		</div>
		&nbsp;
	</div>
</footer>
<script src="<?php echo docroot; ?>js/main.js"></script>
</body>
</html>