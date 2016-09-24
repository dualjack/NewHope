<?php $post_id = get_the_id();

$page_num = ( get_query_var('page') ) ? get_query_var('page') : 1;

$wp_query = new WP_Query(array(
	"post_type"			=>	"post",
	"posts_per_page"	=>	10,
	"paged"				=>	$page_num
));?>

<div class="posts_archive_1">
	<div class="wrapper wrapper_center">

	<?php
	foreach($wp_query->posts as $post):

		setup_postdata($post);?>

		<div class="post">

			<div class="head">
				<a class="title" href="<?php the_permalink();?>"><?php the_title();?></a>
				<a class="time" href="<?php the_permalink();?>"><?php echo get_the_date()?></a>
			</div>
			
			<!-- <div class="excerpt">
				<?php if(false){
					the_excerpt();
				} else {
					echo wp_trim_words(get_the_content(), 60, " ... ");
				}?>
			</div> -->

			<div class="content">
				<?php the_content();?>
			</div>

			<!-- <a class="read_more" href="<?php the_permalink();?>">
				Czytaj więcej
			</a> -->

			<div class="social_link">
	
				<a class="icon fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink();?>" target="_blank"></a>
				<a class="icon tw" href="https://twitter.com/intent/tweet?url=<?php echo the_permalink();?>" target="_blank"></a>
				<a class="icon gp" href="https://plus.google.com/share?url=<?php echo the_permalink();?>" target="_blank"></a>

			</div>

		</div>

		<?php wp_reset_postdata();

	endforeach;
	?>

		<div class="pagination">
		<?php
		echo paginate_links(array(
			"base" 			=> 	'/blog/%#%',
			"prev_text"     => 	"<",
		    "next_text"     => 	">",
		));?>
		</div>

	</div>
</div>