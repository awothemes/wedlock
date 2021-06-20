<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wedlock
 */

?>

<article id="post-<?php the_ID(); ?>" <?php if ( !is_single() ) { post_class('blogroll');}else{post_class();}?>>
	<header class="entry-header">

	
		<?php 
			if ( is_single() ) :?>
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php wedlock_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
			<?php  
			else :?>
			
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php wedlock_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				
				<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );?>
				
			<?php 
			endif; ?>

	</header><!-- .entry-header -->
	
	<?php if ( is_single() ) :?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wedlock' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wedlock' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif;?>
		
	<footer class="entry-footer">
		<?php wedlock_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
