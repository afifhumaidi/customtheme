<?php
/**
 * Template for displaying 404 page (not found).
 **/

 get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
       <section class="error-404 not-found">
           <header class="page-header">
               <h1 class="page-title"><?php esc_html_e( 'Oops! that page can\'t be found.' ) ?></h1>
           </header>

           <div class="page-content">
                <p><?php esc_html_e( 'Tt looks like nothing was found. Maybe try one of the links below or a search form below' ) ?></p>
                <?php get_search_form(); ?>
            </div>
       </section>
    </main>
</div>

<?php
 get_footer();
?>