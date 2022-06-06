Filename: page.php
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



Filename:  tempalte/parts/section-test.php

<?php $columns = get_sub_field( 'columns' );
foreach($columns as $column): ?>
<h3><?php echo $column['title']?></h3>
<h4><?php echo $column['content']?></h4>
<?php endforeach; ?>



Filename:  tempalte/parts/section-test2.php
<?php  $columns = get_sub_field( 'columns' );
foreach($columns as $column): ?>
<h4><?php echo $column['caption']?></h4>
<img src="<?php echo $column['img']['url']?>" alt="">
<?php endforeach; ?>
