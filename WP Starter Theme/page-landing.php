<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<?php include_once( 'modules/nav.php' ); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<div class="jumbotron">
    <div class="container">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>  
</div>

<div class="widgets">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 widget text-center">
                <?php if ( is_active_sidebar( 'home_widget_1' ) ) : ?>
                <?php dynamic_sidebar( 'home_widget_1' ); ?>
                <?php endif; ?>
            </div>

            <div class="col-xs-12 col-md-4 widget text-center">
                <?php if ( is_active_sidebar( 'home_widget_2' ) ) : ?>
                <?php dynamic_sidebar( 'home_widget_2' ); ?>
                <?php endif; ?>
            </div>

            <div class="col-xs-12 col-md-4 widget text-center">
                <?php if ( is_active_sidebar( 'home_widget_3' ) ) : ?>
                <?php dynamic_sidebar( 'home_widget_3' ); ?>
                <?php else : ?>
                widget 3
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<main class="col-xs-12 mb-15">
    <div class="container">
        <div class="row">
        <?php the_content(); ?>
        </div>
    </div>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>

<?php include_once( 'footer.php' );?>
</body>
</html>
