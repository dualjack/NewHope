<?php while(have_posts()):the_post();?>

<div class="page_content">
	<div class="wrapper wrapper_center">
		
		<?php if(get_field('has_sections')):?>

		<div class="sidebar">
			
			<h2><?php the_title();?></h2>

			<div class="sections_list">
				<?php 
				$section_num = 0;
				while(have_rows('sections')):the_row();
				?>

				<a href="#sec_<?php echo $section_num++;?>" class="section_title">
					<?php the_sub_field('title');?>
				</a>

				<?php endwhile;?>

			</div>

		</div>

		<div class="content_box_sections">
			
			<?php 
			$section_num = 0;
			while(have_rows('sections')):the_row();
			?>

			<div class="box" id="sec_<?php echo $section_num++;?>">

				<?php if(get_sub_field('title')):?>

				<h2>
					<?php the_sub_field('title');?>
				</h2>

				<?php endif;?>
				
				<div class="content">
					<?php the_sub_field('content');?>
				</div>

			</div>

			<?php endwhile;?> 

		</div>

		<?php endif;
		if(!get_field('has_sections',get_the_id())):?>

		<div class="content_box_main">
			
			<?php the_field('page_content');?>

		</div>

		<?php endif;?>

	</div>
</div>

<?php endwhile;?>