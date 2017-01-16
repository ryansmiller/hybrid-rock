<!doctype html>
<html class="no-js no-svg" <?php language_attributes( 'html' ); ?>>

<head <?php hybrid_attr( 'head' ); ?>>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); // Hook required for scripts, styles, and other <head> items. ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<div id="container">

		<div class="skip-link">
			<a href="#content" class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'hybrid-base' ); ?></a>
		</div><!-- .skip-link -->

		<?php hybrid_get_menu( 'primary' ); // Loads the menu/primary.php template. ?>

		<header <?php hybrid_attr( 'header' ); ?>>

			<?php if ( display_header_text() ) : // If user chooses to display header text. ?>

				<div <?php hybrid_attr( 'branding' ); ?>>
					<?php hybrid_site_title(); ?>
					<?php hybrid_site_description(); ?>
				</div><!-- #branding -->

			<?php endif; // End check for header text. ?>

		</header><!-- #header -->

		<?php hybrid_get_menu( 'secondary' ); // Loads the menu/secondary.php template. ?>

		<div id="main" class="main">

			<?php hybrid_get_menu( 'breadcrumbs' ); // Loads the menu/breadcrumbs.php template. ?>
