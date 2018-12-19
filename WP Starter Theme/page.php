<!-- The default page template. Essentially the same thing as a post. It's just easier for user interface and designing but they act the same !-->
<?php get_header(); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

<main>
<?php the_title(); ?>
<?php the_content(); ?>
</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
