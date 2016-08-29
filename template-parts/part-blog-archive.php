<div class="blog_archive">
	<div class="wrapper wrapper_center">
		
		<?php $posts = get_posts(array(
			'posts_per_page'	=> -1,
			'post_type'			=> 'post'
		));

		foreach($posts as $post): setup_postdata($post);
		?>

		<div class="post">
			<div class="header">
				<div class="date_container">
					<div class="date">
						<div class="wrapper">
							<span class="day"><?php echo get_the_date('d');?></span>
							<span class="sub_day"><?php echo get_the_date('F Y');?></span>
						</div>
					</div>
				</div>
				<div class="title_container">
					<?php the_title();?>
				</div>
			</div>
			<div class="content">
				<?php the_content();?>
			</div>
		</div>

		<?php wp_reset_postdata();
		endforeach;
		?>

	</div>
</div>