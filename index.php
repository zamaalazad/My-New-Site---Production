<?php get_header(); ?>


	<article id="blog_article" class="container">
		<?php while ( have_posts() ): the_post(); ?>
		
		<section class="post flex">

			<h1><?php the_title(); ?></h1>
			<section class="post_element flex">
				<section class="post_content flex2 article_content post_padding"><?php the_content(); ?></section>
				
				<section class="post_media flex1"><?php the_post_thumbnail(); ?></section>
			</section>

		</section>
	<?php endwhile; ?>

	</article>
    



<?php get_footer(); ?>