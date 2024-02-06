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
                      <li class="breadcrumb-item active" aria-current="page">News left sidebar</li>
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

      <div class="col-lg-4 order-1 order-lg-0">

        <div class="sidebar sidebar-left">
          <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/images/news/news1.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">We Just Completes $17.6 Million Medical Clinic In Mid-missouri</a>
                  </h4>
                </div>
              </li><!-- 1st post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/images/news/news2.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                  </h4>
                </div>
              </li><!-- 2nd post end-->

              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  <a href="#"><img loading="lazy" alt="img" src="<?php echo get_template_directory_uri(); ?>/images/news/news3.jpg"></a>
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                  </h4>
                </div>
              </li><!-- 3rd post end-->

            </ul>

          </div><!-- Recent post end -->

          <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Commercial</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Structure</a></li>
            </ul>
          </div><!-- Categories end -->

          <div class="widget">
            <h3 class="widget-title">Archives </h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Feburay 2016</a></li>
              <li><a href="#">January 2016</a></li>
              <li><a href="#">December 2015</a></li>
              <li><a href="#">November 2015</a></li>
              <li><a href="#">October 2015</a></li>
            </ul>
          </div><!-- Archives end -->

          <div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>

            <ul class="list-unstyled">
              <li><a href="#">Construction</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Project</a></li>
              <li><a href="#">Building</a></li>
              <li><a href="#">Finance</a></li>
              <li><a href="#">Safety</a></li>
              <li><a href="#">Contracting</a></li>
              <li><a href="#">Planning</a></li>
            </ul>
          </div><!-- Tags end -->


  *      </div><!-- Sidebar end -->
 *     </div><!-- Sidebar Col end -->

      <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
      <!-- dynamic post loop-->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



      
      

        <div class="post">
          <!-- dynamic post image -->
          <div class="post-media post-image">
            <?php if ( has_post_thumbnail() ) {
	                the_post_thumbnail( array('class'=>'img-fluid'));
                  } 
              ?>
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> News</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                    class="comments-link">Comments</a></span>
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

       

        <nav class="paging" aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
          </ul>
        </nav>

      </div><!-- Content Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

 <!-- footer -->
 <?php get_footer(); ?>