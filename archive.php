<?php
/**
 * Template for displaying archive pages.
 **/

 get_header();
 ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            if(have_posts()) : ?>
                <header class="archive-page-header">
                    <?php 
                        the_archive_title( '<h1 class="archive-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' )
                    ?>
                </header>

        <?php 
            // start loop
            while(have_posts()) :
                the_post();
                get_template_part('template-parts/post/content');
            endwhile;

            echo (paginate_links( [
                'prev_text' => esc_html__( 'Prev' ),
                'next_text' => esc_html__( 'Next' )
            ] ));

            else : 
                get_template_part('template-parts/page/content' , 'none');
            endif; 
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

 <?php
    get_footer();
?>