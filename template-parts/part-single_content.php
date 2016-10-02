<?php if(has_post_thumbnail()):?>

<div class="post_banner" style="background-image:url('<?php the_post_thumbnail_url("post_banner");?>')">
	
</div>

<?php endif;?>

<?php while(have_posts()):the_post();?>

<div class="single_post_content">
	<div class="wrapper wrapper_center">
		
		<div class="head">

			<div class="title"><?php the_title();?></div>
			<div class="time"><?php the_date();?></div>

		</div>
		<div class="content">
			<?php the_content();?>
		</div>

	</div>
</div>

<?php endwhile;?>