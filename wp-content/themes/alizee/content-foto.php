<?php
/**
 * @package Alizee
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-thumb">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
				
				<?php the_post_thumbnail('alizee-thumb'); ?>
			</a>		
		</div>	
	<?php endif; ?>	
	
<?php if (( get_theme_mod('home_layout') == 'one_col' ) && ( has_post_thumbnail() )) : //check if we have a thumbnail, if not add a class to the content ?>
	<div class="post-content">
<?php else : ?>
	<div class="post-content no-thumb">
<?php endif; ?>	
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<div class="base">
		<span class="tags"><?php the_tags(' ',' ',' '); ?></span>
		<span>
			<div class="entry-meta">

				<?php alizee_posted_on(); ?>
			</div><!-- .entry-meta -->
					
		</span>
		</div>
	</div>
	
</article><!-- #post-## -->
