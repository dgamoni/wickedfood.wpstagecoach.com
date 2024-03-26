
<div class="featured-pages clear">
    <div class="container grid-thumb">
        <div class="images-section">
            <div class="row">
    			<?php 
    			if( have_rows('home_posts') ):
    			    while ( have_rows('home_posts') ) : the_row(); ?>
                        <div class="col-md-4 col-sm-12 col-xs-12">
    	                    <a href="<?php echo get_sub_field('url'); ?>">
    	                        <img src="<?php the_sub_field('img'); ?>">
    	                        <div class="bg-para text-center">
    	                        <h3 class="entry-title">
    	                        	<a href="<?php echo get_sub_field('url'); ?>" rel="bookmark"><?php the_sub_field('title'); ?></a>
    	                        </h3>
    								<!-- <h2><?php the_sub_field('title'); ?></h2> -->
    	                            <p><?php the_sub_field('content'); ?></p>
    	                        </div>
    	                    </a>
                        </div>
                    <?php
    	  			endwhile; 
              	endif;
              	?>
            </div>
        </div>  
    </div> 
</div>

<style>
.home-banner.text-center {
    margin-bottom: 0;
}
.home-features {
background-color: white;
    padding-bottom: 40px;
    padding-top: 40px;
        display: flex;
}
.home-features div {
    background-color: white;
}

.images-section img {
    max-width: 100%;
    z-index: 0;
    float: left;
        min-height: 461px;
    object-fit: cover;
}


.images-section .col-md-4 {
    width: 33.33333333%;
}

.images-section .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: left;
}



.images-section .bg-para {
    /*background: #f1f1f1;*/
    background: #eeeeee;
    margin: 0 20px 0 20px;
    padding: 25px 35px;
    margin-top: -15px;
    float: left;
    z-index: 99999;
	text-align: center;
}
.images-section {
    float: left;
   /* margin: 40px 0;*/
   margin-bottom: 40px; 
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
.woocommerce .hero-container .button, .woocommerce .hero-container .button:hover {
    background: #005b20 !important;
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