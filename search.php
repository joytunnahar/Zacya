<!-- header -->
<?php get_header(); ?>

<div id="banner-area" class="banner-area" style="background-color: blue;">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Search result for:<?php echo get_search_query(); ?> </h1>
                <nav aria-label="breadcrumb">
                <?php echo mj_wp_breadcrumb(); ?>
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

    <!-- sidebar -->
    <?php get_sidebar(); ?>

      <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
      <!-- dynamic post loop-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      
      

        <div class="post">
          <!-- dynamic post image -->
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


              <!-- dynamic post title -->
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
            </div><!-- header end -->

            <!-- dynamic post excerpt content -->
            <div class="entry-content">
             <?php the_excerpt(); ?>
            </div>

            <div class="post-footer">
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Continue Reading</a>
            </div>

          </div><!-- post-body end -->
        </div><!-- 1st post end -->


        <!-- dynamic post loop end here -->
        <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <!-- dynamic post pagination -->
        <?php 
              the_posts_pagination( array(
                'prev_text'          => __ ('<i class="fas fa-angle-double-left"></i>'),
                'next_text'          => __ ('<i class="fas fa-angle-double-right"></i>') ,
                'screen_reader_text' => __ ('')
                
            ) );
          ?> 

       

        <!-- <nav class="paging" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
          </ul>
        </nav> -->

      </div><!-- Content Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 <!-- footer -->
 <?php get_footer(); ?>
