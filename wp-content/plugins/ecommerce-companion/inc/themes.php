<?php
$theme = wp_get_theme(); // Gets the Current Theme Name
	
	if( 'Storely' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/storely.php';
	}

	if( 'Shoply' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/shoply/shoply.php';
	}

	if( 'Storess' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storess/storess.php';
	}

	if( 'Storezia' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storezia/storezia.php';
	}

	if( 'Shopiva' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/shopiva/shopiva.php';
	}

	if( 'Shopient' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/shopient/shopient.php';
	}

	if( 'Aromatic' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/aromatic.php';
	}

	if( 'Ayroma' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/ayroma.php';
	}

	if( 'Feauty' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/feauty.php';
	}

	if( 'Retailsy' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/retailsy.php';
	}
	
	if( 'Child1' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/child1/child1.php';
	}
	
	if( 'Child2' == $theme->name){
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/child2/child2.php';
	}