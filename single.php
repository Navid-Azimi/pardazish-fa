<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header(); ?>

    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title"><?php echo the_title(); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="post-content" class="container-fluid">
    <div class="container">
        <div id="post-body" class="row">
            <div id="post-holder" class="col-md-9">
                <div id="post-1" class="post">
                    <div class="post-thumbnail">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="post-image" alt="">			
                    </div>
                    <h4 class="post-title"><?php echo the_title(); ?></h4>		
                    <div class="meta">
                        <span class="view">10 Views</span><span class="like"><a href="#" class="like-btn">7 Like</a></span>		
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
 wp_reset_postdata();          else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p> <?php

endif;
  wp_reset_postdata();
            ?>
            <div id="sidebar" class="col-md-3">
                <div class="widget-area">
                    <div id="categories" class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <div class="item">
                            <?php echo the_category(); ?>
                        </div>
                        
                    </div>

                    <div id="popular-posts" class="widget">
                        <h3 class="widget-title">Popular Posts</h3>		
                        <?php if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?> 
                        <div class="item row">
                            <div class="thumb col-xs-3">
                                <img src="images/post.jpg" alt="">					
                            </div>
                            <div class="info col-xs-9">
                                <span class="date">January 21, 2016</span>
                                <span class="title">
                                    <a href="#"><?php echo the_title(); ?></a>
                                </span>
                            </div>
                        </div>
                        
                        <?php 
            endwhile; 
  wp_reset_postdata(); 
endif; 
  wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>