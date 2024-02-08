<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->
<!-- header -->
<?php get_header(); ?>
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">News</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">News</a></li>
                      <li class="breadcrumb-item active" aria-current="page">News Right sidebar</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <!-- dynamic post loop-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="post-content post-single">
          <div class="post-media post-image">
           <?php if ( has_post_thumbnail() ) {
	                the_post_thumbnail( array( 'medium'));
                  } 
              ?>
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">

              <!-- post author -->
              <span class="post-author">
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><i class="far fa-user"></i><?php the_author(); ?></a>
                </span>

                <!-- post category -->
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><?php the_category( ' ,' ); ?>
                </span>

                <!-- post date -->
                <span class="post-meta-date"><i class="far fa-calendar"></i> <?php the_date(); ?></span>

                <!-- post comments -->
                <span class="post-comment"><i class="far fa-comment"></i><?php comments_popup_link( __( 'Leave a comment', 'text-domain' ), __( '1 Comment', 'text-domain' ), __( '% Comments', 'text-domain' ) ); ?></span>
              </div>

              </div>
              <h2 class="entry-title">
                <?php the_title(); ?>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <?php the_content(); ?>
            </div>

            <div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
                <a href="#">Construction</a>
                <a href="#">Safety</a>
                <a href="#">Planning</a>
              </div>
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                  <li class="social-icons-head">Share:</li>

                  <li><a target="_blank" href="https://www.facebook.com/WPAssistantPro/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"><i class="fab fa-facebook-f"></i></a></li>

                  <li><a target="_blank" href="https://twitter.com/WPAssistantPro?text=<?php the_permalink(); ?>&t=<?php the_title(); ?>"><i class="fab fa-twitter"></i></a></li>

                  
                  <li><a target="_blank" href="https://github.com/joytunnahar/my-fruit-brust=<?php the_permalink(); ?>&t=<?php the_title(); ?>"><i class="fab fa-linkedin"></i></a></li>

                </ul>
              </div>
            </div>

          </div><!-- post-body end -->
        </div><!-- post content end -->

                  <!-- Author avatar -->
        <div class="author-box d-nlock d-sm-flex">
          <div class="author-img mb-4 mb-md-0">
          <?php echo get_avatar( get_the_author_meta( 'ID' ), 110 ); ?>
          </div>
          <div class="author-info">
          <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>

            <p class="mb-2"></p>
            <?php the_author_meta('description', get_the_author_meta('ID')) ?>
            <p class="author-url mb-0">Website: <?php the_author_link();  ?></p>

          </div>
        </div> <!-- Author box end -->


        <!--post comments -->
        <?php
        if(comments_open() || get_comments_number()) : comments_template();
        endif;
         ?>



        <!-- dynamic post loop end here -->
        <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>



        

        
      </div><!-- Content Col end -->

    <!-- sidebar -->
    <?php get_sidebar(); ?>

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

 <!-- footer -->
 <?php get_footer(); ?>
  </body>

  </html>