<?php
/**
 * @package fastr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<a href="<?php the_permalink(); ?>"><?php fastr_posted_on(); ?></a>
            <?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'fastr' ) );
				if ( $categories_list && fastr_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'on %1$s', 'fastr' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'fastr' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'tagged %1$s', 'fastr' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>

		</div><!-- .entry-meta -->
		<?php endif; ?>

		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>		
	</header><!-- .entry-header -->

	
	<div class="entry-summary">
        <?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
