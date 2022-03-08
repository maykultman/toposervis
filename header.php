<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="container">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<img src="<?=getLogo()?>" width="150">
				<div class="navbar-toggler" style="cursor:pointer;font-size:30px" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"  aria-controls="offcanvasWithBackdrop">
					☰
				</div>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<?php wp_nav_menu([ 'theme_location' => 'menu-1', 'menu_class' => 'nav justify-content-end mx-0']) ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<!-- Menu mobil -->
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
  		<div class="offcanvas-header px-4">
			<?php getLogo(); ?>
    		<button type="button" class="btn-close text-reset align-self-start" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  		</div>
  		<div class="offcanvas-body">
		  	<?php wp_nav_menu(['theme_location' => 'menu-1','container'=>'ul', 'menu_class'=>'nav flex-column mx-0']); ?>
  		</div>
	</div>
	<main id="primary" class="site-main container my-4 py-5 ">