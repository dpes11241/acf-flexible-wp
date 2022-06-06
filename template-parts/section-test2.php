<?php  $columns = get_sub_field( 'columns' );
foreach($columns as $column): ?>
<h4><?php echo $column['caption']?></h4>
<img src="<?php echo $column['img']['url']?>" alt="">
<?php endforeach; ?>
