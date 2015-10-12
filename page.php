<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default. No sidebar.
 *
 * @package pgb
 */

get_header(); ?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12" data-file="page.php">
		
		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php nlk_pagelink_previous(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<header class="col-md-12">

						<?php the_title('<h1>', '</h1>'); ?>

					</header>

					<div class="col-md-12">

						<div class="row">

							<?php get_template_part( 'content', get_post_format() ); ?>

						</div>

					</div>

				</article>

				<?php nlk_pagelink_next(); ?>

			<?php endwhile; // end of the loop. ?>

		<?php endif; ?>

		<?php // The Loop--> ?>

	</div>

<?php get_footer(); ?>