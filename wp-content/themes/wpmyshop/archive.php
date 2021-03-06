<?php
/**
 * The template for displaying archive pages
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

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;?>

		<?php //the_posts_navigation();?>
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
<?php get_footer(); ?>
