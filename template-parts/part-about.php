<?php

$page_id = 233;
$x = 0;
?>

<div class="part_about">
	<div class="wrapper wrapper_center">
		
		<div class="left">
			
			<ul class="bars">

				<?php while(have_rows('list_left',$page_id)):the_row();?>
				<li>
					<a 	href="#box_<?php echo$x++;?>"
						style="background-image:url('<?php the_sub_field('icon');?>')"
					>
						<?php the_sub_field('title');?>
					</a>
				</li>
				<?php endwhile;?>

			</ul>

		</div>

		<div class="center">
			
			<?php the_field('content_center', $page_id);?>

		</div>

		<div class="right">
			<?php $image = get_field('img_right', $page_id);?>
			<div class="img_circle" style="background:url('<?php echo $image['sizes']['thumbnail'];?>')">
				
			</div>
		</div>

	</div>
</div>