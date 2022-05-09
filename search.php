<?php
/**
 * Template for displaying search results.
 **/

 get_header();
 ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            if(have_posts()) : 
                
                // start loop
                while(have_posts()) :
                    the_post();
                    get_template_part('template-parts/page/content', 'search');
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