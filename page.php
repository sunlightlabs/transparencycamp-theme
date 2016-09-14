<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="content">
					<div id="featured">
						<div class="jumbotron container stripe">
							<div class="rapper"><div id="my-sharethis"><?php do_action( 'custom_sharethis_widget' ); ?></div></div>
				<?php the_content(); ?>
						</div>
					</div>
				</div>

				<?php // comments_template( '', true ); // Remove if you don't want comments ?>

				<!-- <br class="clear"> -->

				<?php // edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
