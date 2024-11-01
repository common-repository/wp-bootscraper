<?php
	//Preventing from direct access
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
		
	$settings = get_option('wp_bootscraper_frontend');
	$settings = unserialize($settings);
?>
<form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" id="<?php echo esc_attr( $this->slug ); ?>-frontend-save">
	<input type="hidden" name="action" value="save_wp_bootscraper"/>
	<input type="hidden" name="section" value="frontend"/>
	<?php wp_nonce_field('nonce_save_wp_bootscraper', 'nonce_save_wp_bootscraper'); ?>
	<div class="rows all"><input type="checkbox" name="frontend_select_all" class="select-all" <?php echo (!empty($settings['frontend_select_all']))?'checked':''; ?>/> Select All</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_wp_emoji" value="1" <?php echo (!empty($settings['frontend_wp_emoji']))?'checked':''; ?>/> WP Emoji</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_json_api_links" value="1" <?php echo (!empty($settings['frontend_json_api_links']))?'checked':''; ?>/> JSON API links</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_dots_from_excerpt" value="1" <?php echo (!empty($settings['frontend_remove_dots_from_excerpt']))?'checked':''; ?>/> Remove [...] from Excerpt</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_dns_prefetch_to_s_w_org" value="1" <?php echo (!empty($settings['frontend_remove_dns_prefetch_to_s_w_org']))?'checked':''; ?>/> Remove dns-prefetch to //s.w.org</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_wp_json" value="1" <?php echo (!empty($settings['frontend_remove_wp_json']))?'checked':''; ?>/> Remove wp-json</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_wp_embed_min_js" value="1" <?php echo (!empty($settings['frontend_remove_wp_embed_min_js']))?'checked':''; ?>/> Remove wp-embed.min.js</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_wordpress_generator" value="1" <?php echo (!empty($settings['frontend_remove_wordpress_generator']))?'checked':''; ?>/> Remove WordPress Generator</div>
	<div class="rows"><input type="checkbox" class="checkbox" name="frontend_remove_wlwmanifest_link" value="1" <?php echo (!empty($settings['frontend_remove_wlwmanifest_link']))?'checked':''; ?>/> Remove wlwmanifest.xml</div>
	<div class="rows save"><button type="submit" class="button button-primary">Save Changes</button></div>
</form>
