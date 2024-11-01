<?php
	//Preventing from direct access
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
?>
<div class="wrap">
	<h1><?php echo $this->title; ?></h1>
	<ul class="subsubsub">
		<li class="all"><a href="<?php echo $this->admin_url; ?>&view=frontend" title="Frontend" <?php echo (empty($_GET['view']) or $_GET['view'] == 'frontend' )? 'class=\'current\'': ''; ?>>Frontend</a> |</li>
		<li class="all"><a href="<?php echo $this->admin_url; ?>&view=administrator" title="Administrator" <?php echo (!empty($_GET['view']) and $_GET['view'] == 'administrator' )? 'class=\'current\'': ''; ?>>Administrator</a></li>
	</ul>
	<div id="<?php echo $this->slug; ?>-views">
		<?php
		 $template = !empty($_GET['view'])? $_GET['view']: 'frontend';
		 if(array('frontend', 'administrator')){
			require_once( $this->plugin_path . '/templates/' . $template . '.php' );
		 } else {
			require_once( $this->plugin_path . '/templates/frontend.php' );
		 }
		?>
	</div>
</div>