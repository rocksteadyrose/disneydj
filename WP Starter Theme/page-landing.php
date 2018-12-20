<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>
<?php include_once( 'modules/nav.php' ); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


<div class="jumbotron jumbotron-fluid">

    <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
        <source src="https://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" data-src="" type="video/mp4">
        <!-- <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm"> -->
        <!-- <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg"> -->
    </video>

    <div class="container text-white">
        <div class="row">
            <div class="col-xs-8" id="jumbotrontext">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">LEARN MORE</a>
            </div>
        </div>
    </div>

    <div class="row arrow bounce text-center">
        <div class="col-xs-12">
            <a class="fa fa-arrow-down fa-2x js-scroll-trigger" href="#"></a>
        </div>
    </div>

</div>

<!-- <div class="widgets">
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
</div> -->

<main class="col-xs-12 mb-15">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 container aboutus">
                <h1>ABOUT US</h1>
            </div>
        <?php the_content(); ?>
        </div>
    </div>
</main>

<div class="col-xs-12 container contactsection">
      <h2 class="text-center">We'd
        <i class="fa fa-heart"></i>
        to hear from you!</h2>
      <div class="socials text-center">
            <a href="#" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="mailto:contact@contact.com?" target="_top">
              <i class="fa fa-envelope"></i>
            </a>
      </div>
</div>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>

<?php include_once( 'footer.php' );?>
</body>
</html>
