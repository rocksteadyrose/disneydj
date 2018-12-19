<!-- default template for all of posts that are loaded inside wordpress. Gets all the Wordpress needed files and then the header.php file -->
<?php
/*
* Template Name: Posts
*/
?>
<?php get_header(); ?>

<!-- if there are any posts, while there are any posts, load the posts !-->
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<!-- echo means write on the screen !-->
  <div> <?php echo get_the_title(); ?></div>
  <hr>

<main>
  <div class="container mtb-15">
    <?php the_content(); ?>
  </div>
</main>


<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
