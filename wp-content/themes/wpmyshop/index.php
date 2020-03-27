<?php
/**
 * The main template file
 *
 * 
 */

get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;
// Previous/next post navigation.
			//the_posts_navigation();

			?>
			<nav>
	<ul class="pager">
		<li><?php next_posts_link(__('Previous','wpmyshop')); ?></li>
		<li><?php previous_posts_link(__('Next','wpmyshop')); ?></li>
	
	</ul>
</nav>
	<?php				
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
                    
		</main><!-- .site-main -->
                
	</div><!-- .content-area -->
        <div class="row">
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
                
            </div>
        </div>
</div>
</div>



<?php get_footer(); ?>
