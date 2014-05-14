<?php
/**
 * The template for displaying a content item in a list
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	<?php twentyfourteen_post_thumbnail(); ?>

	<!-- <header class="entry-header"> -->
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<?php
			endif;
			echo "<tr>\n";
			echo "<td>";
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			echo "</td>\n";
			echo "<td>" . get_post_meta( get_the_ID(), 'student', true) . "</td>\n";
			echo "<td>" . get_post_meta( get_the_ID(), 'instructor', true) . "</td>\n";
			echo "<td>" . get_post_meta( get_the_ID(), 'class', true) . "</td>\n";
			echo "</tr>";
		?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
