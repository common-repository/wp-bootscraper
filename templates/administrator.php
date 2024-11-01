<?php
	//Preventing from direct access
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	$settings = get_option('wp_bootscraper_administrator');
	$settings = unserialize($settings);
?>
<form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" id="<?php echo esc_attr( $this->slug ); ?>-frontend-save">
	<input type="hidden" name="action" value="save_wp_bootscraper"/>
	<input type="hidden" name="section" value="administrator"/>
	<?php wp_nonce_field('nonce_save_wp_bootscraper', 'nonce_save_wp_bootscraper'); ?>
	<div class="rows all"><input type="checkbox" name="administrator_select_all" class="select-all" <?php echo (!empty($settings['administrator_select_all']))?'checked':''; ?>/> Select All</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_wp_logo_from_toolbar" value="1" <?php echo (!empty($settings['administrator_remove_wp_logo_from_toolbar']))?'checked':''; ?>/> Remove the WordPress Logo from toolbar</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_comment_link_from_toolbar" value="1" <?php echo (!empty($settings['administrator_remove_comment_link_from_toolbar']))?'checked':''; ?>/> Remove the comment link from toolbar</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_new_link_from_toolbar" value="1" <?php echo (!empty($settings['administrator_remove_new_link_from_toolbar']))?'checked':''; ?>/> Remove the new link from toolbar</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_post_from_side_menu" value="1" <?php echo (!empty($settings['administrator_remove_post_from_side_menu']))?'checked':''; ?>/> Remove Post from side menu</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_comments_from_side_menu" value="1" <?php echo (!empty($settings['administrator_remove_comments_from_side_menu']))?'checked':''; ?>/> Remove Comments from side menu</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_move_acf_under_settings" value="1" <?php echo (!empty($settings['administrator_move_acf_under_settings']))?'checked':''; ?>/> Move ACF menu under Settings as submenu</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_move_ctp_ui_under_settings" value="1" <?php echo (!empty($settings['administrator_move_ctp_ui_under_settings']))?'checked':''; ?>/> Move CTP UI menu under Settings as submenu</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_move_wpseo_under_settings" value="1" <?php echo (!empty($settings['administrator_move_wpseo_under_settings']))?'checked':''; ?>/> Move WordPress SEO under Settings as submenu</div>

	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_wordpress_seo_metabox_from_post" value="1" <?php echo (!empty($settings['administrator_remove_wordpress_seo_metabox_from_post']))?'checked':''; ?>/> Remove WordPress SEO Metabox from Post</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_wordpress_seo_metabox_from_page" value="1" <?php echo (!empty($settings['administrator_remove_wordpress_seo_metabox_from_page']))?'checked':''; ?>/> Remove WordPress SEO Metabox from Page</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_wordpress_seo_column_from_post" value="1" <?php echo (!empty($settings['administrator_remove_wordpress_seo_column_from_post']))?'checked':''; ?>/> Remove WordPress SEO Column from Post</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_wordpress_seo_column_from_page" value="1" <?php echo (!empty($settings['administrator_remove_wordpress_seo_column_from_page']))?'checked':''; ?>/> Remove WordPress SEO Column from Page</div>

	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_trackback_metabox" value="1" <?php echo (!empty($settings['administrator_remove_trackback_metabox']))?'checked':''; ?>/> Remove Trackback metabox</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_comment_metabox" value="1" <?php echo (!empty($settings['administrator_remove_comment_metabox']))?'checked':''; ?>/> Remove Comment metabox</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_author_metabox" value="1" <?php echo (!empty($settings['administrator_remove_author_metabox']))?'checked':''; ?>/> Remove Author metabox</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_custom_fields_metabox" value="1" <?php echo (!empty($settings['administrator_remove_custom_fields_metabox']))?'checked':''; ?>/> Remove Custom Fields metabox</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_slug_metabox" value="1" <?php echo (!empty($settings['administrator_remove_slug_metabox']))?'checked':''; ?>/> Remove Slug metabox</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_add_support_excerpt_metabox" value="1" <?php echo (!empty($settings['administrator_add_support_excerpt_metabox']))?'checked':''; ?>/> Add support for excerpt</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_add_support_featured_image_metabox" value="1" <?php echo (!empty($settings['administrator_add_support_featured_image_metabox']))?'checked':''; ?>/> Add support for featured image</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_completely_turn_off_commenting_functionality" value="1" <?php echo (!empty($settings['administrator_completely_turn_off_commenting_functionality']))?'checked':''; ?>/> Completely turn off commenting functionality</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_remove_post_by_email_from_writing" value="1" <?php echo (!empty($settings['administrator_remove_post_by_email_from_writing']))?'checked':''; ?>/> Remove Post by Email from Writing</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="administrator_footer_thankyou" value="1" <?php echo (!empty($settings['administrator_footer_thankyou']))?'checked':''; ?>/> Change footer thank you <input type="text" size="50" name="administrator_footer_thankyou_text" value="<?php echo (!empty($settings['administrator_footer_thankyou_text']))? stripslashes_deep($settings['administrator_footer_thankyou_text']): ''; ?>"/></div>
	<div class="rows save"><button type="submit" class="button button-primary">Save Changes</button></div>
</form>
