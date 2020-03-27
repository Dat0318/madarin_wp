<?php
/**
 * The template for the sidebar containing the main widget area
 */
?>

<!-- Page Content -->

    <div class="row">

        <!-- /.col-md-4 -->
        
               <?php 
                if (!is_active_sidebar('sidebar-1')) {
                    return;
                }
                ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
              
    </div>
