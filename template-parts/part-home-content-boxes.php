<div class="content_boxes">
	<div class="wrapper wrapper_center">

	<?php $x = 0;
		
	while(have_rows('sections',109)):the_row();?>

		<a id="box_<?php echo$x++;?>" class="box" href="<?php the_sub_field('url');?>">
			<div class="content">
				<?php the_sub_field('desc');?>
			</div>
			<div class="thumbnail">
				<img src="<?php the_sub_field('img');?>">
			</div>
		</a> 

	<?php endwhile;?>

	</div>
</div>