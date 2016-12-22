<?php get_header(); ?>
    <div id="nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
        <div id="post" class="content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( is_front_page()) { ?>
                <h2>
                    <?php the_category('&nbsp;&rsaquo;&nbsp;'); echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?>
                </h2>
            <?php } else { ?>
                <h1>
                    <?php the_category('&nbsp;&rsaquo;&nbsp;'); echo "&nbsp;&rsaquo;&nbsp;"; the_title(); ?>
                </h1>
            <?php } ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
        </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
