<?php
/**
 * The main template file.
 */
get_header();
?>

<div class="banner">

    <div class="banner__search-header d-flex justify-content-between align-items-center">

        <span>FIND</span>

        <div class="banner__search-option">

            <div class="menu">

                <ul class="menu__list">
                    <li>Rooms</li>
                    <li>Flats</li>
                    <li>Hostels</li>
                    <li>Villas</li>
                </ul><!-- /.menu__list -->

            </div><!-- /.menu -->

        </div><!-- /.banner__search-option -->

    </div><!-- /.banner__search-header -->

    <div class="banner__search-bar d-flex justify-content-around align-items-center">

        <div class="banner__search-bar_text d-flex justify-content-around align-items-center">
            <div>
                <p>Location</p>
                <p>Which city do you prefer?</p>
            </div>
            <div>
                <p>Check In</p>
                <p>Add Dates</p>
            </div>
            <div>
                <p>Check Out</p>
                <p>Add Dates</p>
            </div>
            <div>
                <p>Guests</p>
                <p>Add Guests</p>
            </div>
        </div><!-- /.banner__text -->

        <div class="btn banner__search-bar_round">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.3257 12.899L19.7057 18.279C19.8948 18.4682 20.001 18.7248 20.0009 18.9923C20.0008 19.2599 19.8945 19.5164 19.7052 19.7055C19.516 19.8946 19.2594 20.0008 18.9919 20.0007C18.7244 20.0006 18.4678 19.8942 18.2787 19.705L12.8987 14.325C11.2905 15.5707 9.26802 16.1569 7.24287 15.9643C5.21772 15.7718 3.34198 14.815 1.99723 13.2886C0.652477 11.7622 -0.0602651 9.7808 0.00399633 7.74753C0.0682577 5.71427 0.904695 3.78185 2.34315 2.34339C3.7816 0.904939 5.71402 0.0685019 7.74729 0.00424047C9.78056 -0.0600209 11.7619 0.652721 13.2884 1.99747C14.8148 3.34222 15.7716 5.21796 15.9641 7.24312C16.1566 9.26827 15.5704 11.2907 14.3247 12.899H14.3257ZM8.00074 14C9.59204 14 11.1182 13.3678 12.2434 12.2426C13.3686 11.1174 14.0007 9.59129 14.0007 7.99999C14.0007 6.40869 13.3686 4.88257 12.2434 3.75735C11.1182 2.63213 9.59204 1.99999 8.00074 1.99999C6.40944 1.99999 4.88332 2.63213 3.7581 3.75735C2.63289 4.88257 2.00074 6.40869 2.00074 7.99999C2.00074 9.59129 2.63289 11.1174 3.7581 12.2426C4.88332 13.3678 6.40944 14 8.00074 14V14Z"
                    fill="white" />
            </svg>

        </div><!-- /.banner__search-round -->

    </div><!-- /.banner__search-bar -->

</div><!-- /.banner -->

<div id="primary" class="content-area container">

    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/post/content', get_post_format() );
            endwhile;

            echo paginate_links( [
                'prev_text' => esc_html__( 'Prev' ),
                'next_text' => esc_html__( 'Next' ),
            ] );
        else :
            get_template_part( 'template-parts/page/content', 'none' );
        endif;
        ?>
    </main>

    <?php 
    get_sidebar(); 
    get_footer();
    ?>
</div>
<?php