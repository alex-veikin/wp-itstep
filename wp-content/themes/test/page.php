<?php
get_header();

echo get_post_meta($post->ID, 'javascript', true);

while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile;

get_footer();
