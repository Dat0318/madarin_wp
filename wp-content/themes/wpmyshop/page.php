<?php
/**
 * The template for displaying pages
 *
 * 
 */

get_header(); ?>
<div class="container">
    <div class="row">
<div class="col-md-8">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
            
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
            
            
	</main><!-- .site-main -->
       

</div><!-- .content-area -->
</div>
<div class="row">
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
                
            </div>
</div>
</div>
</div>

<?php get_footer(); ?>
