<?php
/**
 * Header Template Without Breadcrumb
 *
 * The header template is generally used on every page of your site. Nearly all other templates call it 
 * somewhere near the top of the file. It is used mostly as an opening wrapper, which is closed with the 
 * footer.php file. It also executes key functions needed by the theme, child themes, and plugins. 
 *
 * This template does not show the "breadcrymb" div 
 *
 * @package Origin
 * @subpackage Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<!-- Mobile viewport optimized -->
<meta name="viewport" content="width=device-width,initial-scale=1">

<?php if ( hybrid_get_setting( 'origin_favicon_url' ) ) { ?>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo hybrid_get_setting( 'origin_favicon_url' ); ?>" />
<?php } ?>

<!-- Title -->
<title><?php hybrid_document_title(); ?></title>

<!-- Stylesheet -->	
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- WP Head -->
<?php wp_head(); ?>

</head>

<!-- Javascript functions to choose the language of the page (English or Spanish) -->
<script type="text/javascript">

function showEnglish() {
	document.getElementById("spanish-text").style.display = "none";
	document.getElementById("english-text").style.display = "block";
}

function showSpanish() {
	document.getElementById("english-text").style.display = "none";
	document.getElementById("spanish-text").style.display = "block";
}
</script>

<body class="<?php hybrid_body_class(); ?>" onload="showSpanish()">

	<?php do_atomic( 'open_body' ); // origin_open_body ?>

	<div id="social-icons">
		<img src="wp-content/themes/origin/user-social-icons/twitter-icon.png" width="50" height="50" class="image" /> <br /><br />
		<img src="wp-content/themes/origin/user-social-icons/facebook-icon.png" width="50" height="50" class="image" /> <br /><br />
		<img src="wp-content/themes/origin/user-social-icons/google-icon.jpg" width="50" height="50" class="image" />
	</div>

	<div id="div-aux">
		<p><!-- div usado para la correcta posicion de los elementos de la pagina --></p>
	</div>

	<div id="container">

		<div class="wrap">

			<?php do_atomic( 'before_header' ); // origin_before_header ?>
	
			<div id="header">
	
				<?php do_atomic( 'open_header' ); // origin_open_header ?>
	
					<div id="branding">
						
						<?php origin_site_title(); ?>
						
					</div><!-- #branding -->
					
					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

					<?php hybrid_site_description(); ?>


					<?php do_atomic( 'header' ); // origin_header ?>
	
				<?php do_atomic( 'close_header' ); // origin_close_header ?>
	
			</div><!-- #header -->
	
			<?php do_atomic( 'after_header' ); // origin_after_header ?>
	
			<?php do_atomic( 'before_main' ); // origin_before_main ?>
	
			<div id="main">
	
				<?php do_atomic( 'open_main' ); // origin_open_main ?>