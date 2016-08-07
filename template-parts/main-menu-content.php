<?php

$page = get_page_by_path('main-menu', null, 'theme_settings');
$page_id = $page->ID;

?>

<div class="main_menu">
	<div class="wrapper wrapper_center">
		
		<div class="left sub_menu">
		<?php while(have_rows('menu_entries_left', $page_id)): the_row();?>

			<a 	class="menu_entry" href="<?php the_sub_field('url');?>">
				<?php the_sub_field('title');?>
			</a>

		<?php endwhile;?>
		</div>

		<div class="right sub_menu">

			<a class="menu_entry has_icon social_fb anim" target="_blank" href="<?php the_field('fb_url',$page_id);?>">
				Facebook
			</a>

		</div>


	</div>
</div>