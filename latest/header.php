<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Latest
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $detect = new Mobile_Detect; ?>

<?php do_action( 'latest_before_header' ); ?>

<header id="masthead" class="site-header">

	<?php do_action( 'latest_top_header' ); ?>

	<?php
		// Load the top nav on desktop
		$headline_text = get_theme_mod( 'latest_headline_text' );
		if ( has_nav_menu( 'top-nav' ) || has_nav_menu( 'social' ) || $headline_text ) {
	 ?>
		<div class="top-bar clear">
			<div class="container">
				<?php if ( $headline_text ) { ?>
					<div class="headline-text"><?php echo wp_kses_post( $headline_text ); ?></div>
				<?php } else { // Show today's date as a fallback ?>
					<div class="headline-text"><?php echo date( get_option( 'date_format' ) ); ?></div>
				<?php } ?>

				<?php if ( has_nav_menu( 'social' ) ) { ?>
					<nav class="social-navigation">
						<?php wp_nav_menu( array(
							'theme_location' => 'social',
							'depth'          => 1,
							'fallback_cb'    => false
						) );?>
					</nav><!-- .social-navigation -->
				<?php } ?>

				<?php if ( has_nav_menu( 'top-nav' ) ) { ?>
					<nav class="top-navigation">
						<?php wp_nav_menu( array(
							'theme_location' => 'top-nav',
							'depth'          => 1,
							'fallback_cb'    => false
						) );?>
					</nav><!-- .social-navigation -->
				<?php } ?>
			</div><!-- .container -->
		</div><!-- .top-bar -->
	<?php } ?>

	<div class="mobile-bar">
		<div class="container">
			<div class="overlay-toggle drawer-toggle drawer-menu-toggle">
				<span class="toggle-visible">
					<i class="fa fa-bars"></i>
					<?php esc_html_e( 'Menu', 'latest' ); ?>
				</span>
				<span>
					<i class="fa fa-times"></i>
					<?php esc_html_e( 'Close', 'latest' ); ?>
				</span>
			</div><!-- .overlay-toggle-->
		</div><!-- .container -->

		<div class="mobile-drawer">
			<?php
				// Get the explore drawer (template-parts/content-menu-drawer.php)
				get_template_part( 'template-parts/content-menu-drawer' );
			?>
		</div><!-- .drawer-wrap -->
	</div><!-- .mobile-bar -->

	<?php if ( has_nav_menu( 'primary' ) ) {
		$menu_status = 'has_primary_menu';
	} else {
		$menu_status = 'no_primary_menu';
	} ?>

	<div class="site-identity clear <?php echo $menu_status ?>">
		<div class="container">
			<div class="header-search-container">
				<?php do_action( 'latest_header_search_area' ); ?>
			</div><!-- .big-search-container -->

			<!-- Site title and logo -->
			<?php latest_title_logo(); ?>
		</div><!-- .container -->

		<!-- Main navigation -->
		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<?php do_action( 'latest_before_primary_menu' ); ?>

				<?php wp_nav_menu( array(
					'theme_location' => 'primary'
				) );?>

				<?php do_action( 'latest_after_primary_menu' ); ?>
			</div><!-- .container -->
		</nav><!-- .main-navigation -->
	</div><!-- .site-identity-->

	<?php do_action( 'latest_bottom_header' ); ?>
</header><!-- .site-header -->

<?php do_action( 'latest_after_header' ); ?>

<?php
	// Get the standard hero header
	get_template_part( 'template-parts/content-hero-header' );
?>

<?php
	// Get the featured pages
	get_template_part( 'template-parts/content-featured-pages' );
?>

<?php
	// Get the standard fixed bar
	get_template_part( 'template-parts/content-fixed-bar' );
?>

<?php do_action( 'latest_before_page' ); ?>
<?php if(is_front_page()) { ?>
<div class="home-banner text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php the_field('banner_content');?>
			</div>
		</div>
	</div>
</div>
    <div class="home-features">
		<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<?php the_field('product_content');?>
			</div>
		</div>
	</div>
	</div>
	<?php } ?>
	<!-- container -->
	<?php if(is_front_page()){ ?>
                    <div class="container">
                        <div class="images-section">
                                <div class="row">
									<?php
					  // check if the repeater field has rows of data
					  if( have_rows('home_posts') ):
					  								
					  // loop through the rows of data
					  while ( have_rows('home_posts') ) : the_row();
				?>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <img src="<?php the_sub_field('img'); ?>">
                                        <div class="bg-para text-center">
											<h2><?php the_sub_field('title'); ?></h2>
                                            <p><?php the_sub_field('content'); ?></p>
                                        </div>
                                    </div>
                                     <?php
				  
				  endwhile; else : 	// no rows found
    	          endif; ?>
                                </div>
                            </div>  
                    </div>
	<?php } ?>
	<!-- /End container -->




<style>

.images-section img {
    max-width: 100%;
    z-index: 0;
    float: left;
}


.images-section .col-md-4 {
    width: 33.33333333%;
}

.images-section .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: left;
}



.images-section .bg-para {
    background: #f1f1f1;
    margin: 0 20px 0 20px;
    padding: 25px 35px;
    margin-top: -15px;
    float: left;
    z-index: 99999;
	text-align: center;
}
.images-section {
    float: left;
    margin: 40px 0;
}

.images-section .col-lg-1, .images-section  .col-lg-10, .images-section  .col-lg-11, .images-section  .col-lg-12, .images-section  .col-lg-2, .images-section  .col-lg-3, .images-section  .col-lg-4, .images-section  .col-lg-5, .images-section .col-lg-6, .images-section .col-lg-7, .images-section .col-lg-8, .images-section .col-lg-9, .images-section .col-md-1, .images-section .col-md-10, .images-section .col-md-11, .images-section .col-md-12, .images-section .col-md-2, .images-section .col-md-3, .images-section .col-md-4, .images-section .col-md-5, .images-section .col-md-6, .images-section .col-md-7, .images-section .col-md-8, .images-section .col-md-9, .images-section .col-sm-1, .images-section .col-sm-10, .images-section .col-sm-11, .images-section .col-sm-12, .images-section .col-sm-2, .images-section .col-sm-3, .images-section .col-sm-4, .images-section .col-sm-5, .images-section .col-sm-6, .images-section .col-sm-7, .images-section .col-sm-8, .images-section .col-sm-9, .images-section .col-xs-1, .images-section .col-xs-10, .images-section .col-xs-11, .images-section .col-xs-12, .images-section .col-xs-2, .images-section .col-xs-3, .images-section .col-xs-4, .images-section .col-xs-5, .images-section .col-xs-6, .images-section .col-xs-7, .images-section .col-xs-8, .images-section .col-xs-9 {

    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;

}
.images-section h2 {
    font-size: 24px;
    font-weight: bold;
}
.images-section .bg-para p {
    font-size: 16px;
	margin:0;
}
@media(max-width: 767px){
    .images-section .col-xs-12 {
    width: 100%;
}
}

@media(max-width: 991px){
    .images-section .col-sm-6 {
    width: 50%;
    }
}

</style>
<div id="page" class="hfeed site">
	<div id="content" class="site-content">
