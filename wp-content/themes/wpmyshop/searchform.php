<?php
/**
 * Template for displaying search forms
 *
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'wpmyshop'); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'wpmyshop'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <input name="submit" type="submit" id="submit" class="search-submit" value="Search">
</form>
