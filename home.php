<?php get_header(); ?>
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Blog & News</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="articles" class="container-fluid">
    <div class="container">
        <div class="row">
            <?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();  ?>
            <div class="col-sm-6 col-md-4">
                <div class="article-summary">
                    <div class="article-img"><img src="<?php the_post_thumbnail_url(); ?>" alt="" /></div>
                    <div class="article-details">
                        <div class="article-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                        <div class="article-text"><?php echo the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            endwhile; 
endif; 
?>
            <div class="col-md-12">
                <div class="pagination">
                    <span class="current page-number">1</span>
                    <a class="page-number" href="#">2</a>
                    <a class="next page-number" href="#"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>  
    </div>
</div>


<?php get_footer(); ?>