<?php
/**
 * @package Alizee
 */
?>

<header class="entry-header">
		

		<div class="entry-meta">
			<?php alizee_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<?php if ( (has_post_thumbnail()) && ( get_theme_mod( 'alizee_post_img' )) ) : ?>
		<div class="single-thumb">
			<?php the_post_thumbnail('alizee-thumb'); ?>
		</div>	
	<?php endif; ?>

	

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'alizee' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'alizee' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
