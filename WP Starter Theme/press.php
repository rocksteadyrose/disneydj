<?php
/*
* Template Name: Press
*/
?>
<?php get_header(); ?>
<?php include_once( 'modules/nav.php' ); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


<div class="jumbotron jumbotron-fluid">

    <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
        <source src="https://i.imgur.com/wCgyi0P.mp4" data-src="" type="video/mp4">
        <!-- <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm"> -->
        <!-- <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg"> -->
    </video>

    <div class="container text-white">
        <div class="row">
            <div class="col-xs-6" id="jumbotrontext">
                <h1 class="display-4">BE OUR GUEST NYC</h1>
                <!-- <p class="lead">Disney Night NYC</p> -->
                <hr class="my-4">
                <p>The home of the two most epic DJ parties: DISNEY NIGHT + BROADWAY NIGHT.</p>
                <!-- <a class="btn btn-primary btn-lg" href="#" role="button">LEARN MORE</a> -->
            </div>
        </div>

        <div class="row bounce text-center" id="arrow">
            <div class="col-xs-12">
                <a class="fa fa-arrow-down fa-2x js-scroll-trigger" href="#learnmore"></a>
            </div>
        </div>

    </div>

</div>


<section class="col-xs-12 mb-15" id="pressinfo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 container">
                <h1>PRESSSSSSS</h1>
                <?php the_content(); ?>
            </div>
            <div class="container aboutus">
               <div class="widgets">
                    <!-- <div class="container">
                        <div class="col-xs-12 col-md-6 widget text-center">
                            <?php if ( is_active_sidebar( 'home_widget_2' ) ) : ?>
                            <?php dynamic_sidebar( 'home_widget_2' ); ?>
                            <?php endif; ?>
                        </div>
                    </div> -->
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="col-xs-12 mb-15" id="events">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 container events">
                <h1>EVENTS</h1>
        </div>
    </div>
</section> -->

<div class="col-xs-12 container contactsection" id="contact">
      <h2 class="text-center">We'd
        <i class="fa fa-heart"></i>
        to hear from you!</h2>
      <div class="socials text-center" id="socialicons">
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
