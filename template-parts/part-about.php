<?php

$page = get_page_by_path('part_about', null, 'theme_settings');
$page_id = $page->ID;

?>

<div class="part_about">
	<div class="wrapper wrapper_center">
		
		<div class="left">
			
			<?php the_field('content_left', $page_id);?>

		</div>

		<div class="right">
			<?php $image = get_field('img_right', $page_id);?>
			<div class="img_circle" style="background:url('<?php echo $image['sizes']['thumbnail'];?>')">
				
			</div>
		</div>

	</div>
</div>