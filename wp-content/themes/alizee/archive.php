<?php

get_header(); ?>
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tags.css" type="text/css" media="all" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/layouts/four-col.css" type="text/css" media="all" />
			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title( 'tag: ');

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'alizee' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'alizee' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'alizee' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'alizee' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'alizee' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'alizee' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'alizee');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'alizee');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'alizee' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'alizee' );

						else :
							_e( 'Archives', 'alizee' );

						endif;
					?>
				</h1>
			</header>

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
						get_template_part( 'content', 'foto' );
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
