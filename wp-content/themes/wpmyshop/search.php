<?php
/**
 * The template for displaying search results pages
 *
 */
get_header();
?>
<div class="row">
    <div class="col-md-8">
        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php if (have_posts()) : ?>

                    <header class="page-header">
                        <h1 class="page-title"><?php printf(__('Search Results for: %s', 'wpmyshop'), '<span>' . esc_html(get_search_query()) . '</span>'); ?></h1>
                    </header><!-- .page-header -->

                    <?php
                    // Start the loop.
                    while (have_posts()) : the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('template-parts/content', 'search');

                    // End the loop.
                    endwhile;?>

                   
                    		<nav>
	<ul class="pager">
		<li><?php next_posts_link(__('Previous','wpmyshop')); ?></li>
		<li><?php previous_posts_link(__('Next','wpmyshop')); ?></li>
		
	</ul>
</nav>
<?php
                // If no content, include the "No posts found" template.
                else :
                    get_template_part('template-parts/content', 'none');

                endif;
                ?>

            </main><!-- .site-main -->
        </section><!-- .content-area -->
    </div>
    <!-- /.col-md-4 -->
    <div class="row">
        <div class="col-md-4">
            <?php get_sidebar(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
