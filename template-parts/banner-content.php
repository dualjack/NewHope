<?php

$page = get_page_by_path('banner', null, 'theme_settings');
$page_id = $page->ID;

?>

<div class="banner_main" style="background-image:url('<?php the_field('img', $page_id);?>')">
	<div class="wrapper wrapper_center">
		
		<?php if(get_field('show_content', $page_id)):?>
		<div class="content">
			
			<?php the_field('content', $page_id);?> 

		</div>
		<?php endif;?>

	</div>
</div>