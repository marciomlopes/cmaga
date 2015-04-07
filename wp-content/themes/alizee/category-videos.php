<?php

get_header(); ?>
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/videos.css" type="text/css" media="all" />
			<link rel="stylesheet" id="custom-css-css" type="text/css" href="http://cmag.figasdm.com/?custom-css=1&#038;csblog=1&#038;cscache=6&#038;csrev=283" />

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			
			<?php $c = 0; ?>
			<div class="home-layout">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'video' );
					?>
					
				<?php $c++; ?>	
				<?php endwhile; ?>
			

			<?php alizee_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
