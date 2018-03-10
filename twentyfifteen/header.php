<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- PWA -->
    <link rel="manifest" href="/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Germânica Heilkunde">
    <meta name="apple-mobile-web-app-title" content="Germânica Heilkunde">
    <meta name="theme-color" content="#fcfcfc">
    <meta name="msapplication-navbutton-color" content="#fcfcfc">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="msapplication-starturl" content="https://app.germanicaheilkunde.com.br/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="180x180" href="https://app.germanicaheilkunde.com.br/wp-content/uploads/2018/02/cropped-germanica-icon-180x180.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="https://app.germanicaheilkunde.com.br/wp-content/uploads/2018/02/germanica-icon-fundobranco_180.png">
    <script>
        //This is the "Offline copy of pages" service worker

        //Add this below content to your HTML page, or add the js file to your page at the very top to register sercie worker
        if (navigator.serviceWorker.controller) {
            //console.log('[PWA Builder] active service worker found, no need to register')
        } else {
            //Register the ServiceWorker
            navigator.serviceWorker.register('service-worker.js', {
                scope: './'
            }).then(function(reg) {
               // console.log('Service worker has been registered for scope:'+ reg.scope);
            });
        }


        function escapeRegExp(string){
            return string.replace(/([.*+?^${}()|\[\]\/\\])/g, "\\$1");
        }

        if (window.navigator.standalone) {
            alert('hello');
            var a=document.getElementsByTagName("a");
            for(var i=0;i<a.length;i++) {
                if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
                    a[i].onclick=function() {
                        window.location=this.getAttribute("href");
                        return false;
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/addtohomescreen.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/addtohomescreen.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
