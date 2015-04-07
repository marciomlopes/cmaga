<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Alizee
 */

get_header(); ?>
	<div class="titulo">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<span class="tags"><?php the_tags(' ',' ',' '); ?></span>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/postagenda.css" type="text/css" media="all" />

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'postagenda' ); ?>

			<?php if (get_theme_mod('author_bio') != '') : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>			

			

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>