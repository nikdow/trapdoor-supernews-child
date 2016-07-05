<?php get_header(); ?>

	<div id="primary" class="content-area column">
		<div id="content" class="content-loop">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
                    <span style="color:white;">&nbsp;&nbsp;&nbsp;.</span><!-- force some content although invisible to give the div height-->
                    <!-- footer top interacts with this-->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'secondary' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
