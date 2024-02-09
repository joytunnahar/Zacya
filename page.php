<!-- header -->
<?php get_header(); ?>

<!-- banner -->
<div id="banner-area" class="banner-area" style="background-color: blue;">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php the_title(); ?></h1>
                <nav aria-label="breadcrumb">
                <?php echo mj_wp_breadcrumb(); ?>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


<!-- main container -->
<section id="main-container" class="main-container">
  <div class="container">
        <div class="row">
                <div class="col-lg-12 mb-12 ">
                    <!-- dynamic post loop-->
                    <?php
                     if ( have_posts() ) : while ( have_posts() ) :
                         the_post(); 
                        the_content();
                    ?>


                     <!-- dynamic post loop end here -->
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                </div>
    </div>
</section>
<!-- footer -->
<?php get_footer(); ?>