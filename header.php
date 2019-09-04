<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500|Orbitron:500,900|Roboto:500&display=swap" rel="stylesheet"> 
    <head>

        <?php wp_head();?>
    
    </head>

<body <?php body_class();?>>

<!-- ******************* Top ******************* -->
<div class = "header">
	<div class = "gradient-top-background">

<!-- ******************* The Navbar Area ******************* -->

		<div class = "logo">
			<!-- Your site title as branding in the menu -->
			
		<!-- end custom logo -->
		</div>
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable " href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		


		<!-- ************************ navigation for small devices *************************** -->
		<nav class="navbar navbar-expand-md navbar-dark navbar-custom">

		<?php if ( 'container' == $container ) : ?>
			<div class="container " >
		<?php endif; ?>

				

				<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse mr-auto  ',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mr-auto topnav ',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div><!-- .container -->
			

			<!-- Selected page lightup -->
		</nav><!-- .site-navigation -->


		<!-- ************************ navigation for large devices *************************** -->
		<nav class=" justify-content-center navbar-large">

		<?php if ( 'container' == $container ) : ?>
			<div class="container " >
			<?php endif; ?>

				

				<!-- <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button> -->

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'all-items',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'topnav ',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			
			</div><!-- .container -->
		

		<!-- Selected page lightup -->
		</nav><!-- .site-navigation -->


	</div>
</div>


<div class = "container-title">
	<?php if ( 'container' == $container ) : ?>
	<?php endif; ?>
</div>

<!--
<header class="sticky-top"> 
        <div class="container">


            <?php $numbers = array(4, 6, 2, 22, 11);
                sort($numbers);
                
               
                 ?>
                    <h1><span class="badge badge-secondary"><?php  print_r(array_reverse($numbers)); ?> </span></h1>
                   
            
        </div>
</header>
-->