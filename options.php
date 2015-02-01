<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '#d0114a',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';
	
	
	
	
	//START THEME OPTIONS DESIGN
	$options = array();

	$options[] = array(
		'name' => __('Anpassungen', 'options_check'),
		'type' => 'heading');
		
		//PAGE1
		
		$options[] = array(
		'name' => __('Custom Header Hintergrundbild', 'options_check'),
		'desc' => __('Lade hier ein neues Header Bild hoch. Am besten zirka 500px x 1200px gross.', 'options_check'),
		'type' => 'info');
		
		
		$options[] = array(
		'name' => __('Hintergrundbild', 'options_check'),
		'desc' => __('Hintergrundbild hochladen oder löschen', 'options_check'),
		'id' => 'background_image',
		'type' => 'upload');

		$options[] = array(
		'name' => __('Bild Überschrift', 'options_check'),
		'desc' => __('Text der Bilderüberschrift', 'options_check'),
		'id' => 'leadtext',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Schriftfarbe', 'options_check'),
		'desc' => __('Schriftfarbe anpassen', 'options_check'),
		'id' => 'textcolor',
		'type' => 'color',
		'std' => '#000000');
		
		$options[] = array(
		'name' => __('Custom Mobile Hintergrundbild', 'options_check'),
		'desc' => __('Lade hier ein neues Header Bild für die mobile Ansicht hoch. Am besten zirka 500px x 800px gross.', 'options_check'),
		'type' => 'info');
		
		$options[] = array(
		'name' => __('Hintergrundbild Mobile', 'options_check'),
		'desc' => __('Hintergrundbild hochladen oder löschen', 'options_check'),
		'id' => 'background_image_mobile',
		'type' => 'upload');
		
		$options[] = array(
		'name' => __('Spotify Player Url', 'options_check'),
		'desc' => __('Die embeded URL des Spotify Players', 'options_check'),
		'id' => 'spotify_player_url',
		'type' => 'text');
		
		//SOCIAL ICON PAGE
		$options[] = array(
		'name' => __('Social Icons', 'options_check'),
		'type' => 'heading');
		
		$options[] = array(
		'name' => __('Social Icons Aktivieren', 'options_check'),
		'desc' => __('Mit Haken ist die Social Icons box aktiviert', 'options_check'),
		'id' => 'social_checkbox',
		'std' => '1',
		'type' => 'checkbox');		
		
		$options[] = array(
		'name' => __('Facebook', 'options_check'),
		'desc' => __('URL mit http:// eingeben.', 'options_check'),
		'id' => 'facebook_url',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Twitter', 'options_check'),
		'desc' => __('URL mit http:// eingeben.', 'options_check'),
		'id' => 'twitter_url',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Youtube', 'options_check'),
		'desc' => __('URL mit http:// eingeben.', 'options_check'),
		'id' => 'youtube_url',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Spotify', 'options_check'),
		'desc' => __('URL mit http:// eingeben.', 'options_check'),
		'id' => 'spotify_url',
		'std' => 'Default Value',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Last.FM', 'options_check'),
		'desc' => __('URL mit http:// eingeben.', 'options_check'),
		'id' => 'lastfm_url',
		'std' => 'Default Value',
		'type' => 'text');

		
	return $options;
}