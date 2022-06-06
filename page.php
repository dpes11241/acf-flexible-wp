<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<h1>testf</h1>



<?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>
        <?php if( get_row_layout() == 'columns_section' ): ?>
			<?php get_template_part('template-parts/section','test')?>
        <?php endif; ?>
		<?php if( get_row_layout() == 'column_two' ): ?>
			<?php get_template_part('template-parts/section','test2')?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>




<?php
get_footer();
