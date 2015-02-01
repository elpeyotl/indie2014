<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->


	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		<!-- Get indie.ch logo for facebook sharing-->
  		<meta property="og:image" content="http://www.indie.ch/wp-content/themes/indie2014/img/logo_indie.jpg"/>

  		  		


		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
						<div class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
          
					<div class="navbar-header">
										
						 <div  class="navbar-toggle"  data-target=".navbar-responsive-collapse">
							<a id="nav-toggle" href="#"><span></span></a>
						<!--<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>-->
						</div>
					

					<!-- REMOVE HEADERBRAND <a class="navbar-brand" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><b><?php bloginfo('name'); ?></b></a>-->
					</div>

					<div class="navbar-collapse navbar-collapse-out navbar-responsive-collapse">
						<div class="container-fluid">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
						
						
						
						<!--player mobile-->
						<div class="spotify_player mobile visible-xs">
						<iframe src="<?php echo of_get_option('spotify_player_url', ''); ?>" width="250" height="80" frameborder="0" allowtransparency="true"></iframe>
						</div><!--/spotify_player-->
						
						<!--player desktop-->
						<div class="spotify_player spotify_player_out hidden-xs">
						<iframe src="<?php echo of_get_option('spotify_player_url', ''); ?>" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
						</div><!--/spotify_player-->
						
						<div class="navbar-right">
						<form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>"><span class="search_header">SEARCH</span>
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control_header" autocomplete="off" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</div>
						
						</form>						
						
						<?php if (of_get_option('social_checkbox')) : ?>
						<ul class="socialicons_header">
						<?php if (of_get_option('facebook_url')) :?>
						<li><a class="facebook_page" href="<?php echo of_get_option('facebook_url', ''); ?>" title="Facebook" target="_blank"></a></li>
						<?php endif;?>
						<?php if (of_get_option('twitter_url')) :?>
						<li><a class="tweet_page" href="<?php echo of_get_option('twitter_url', ''); ?>" title="Twitter" target="_blank"></a></li>
						<?php endif;?>
						<?php if (of_get_option('youtube_url')) :?>
						<li><a class="youtube_page" href="<?php echo of_get_option('youtube_url', ''); ?>" title="Youtube" target="_blank"></a></li>	
						<?php endif;?>
						<?php if (of_get_option('spotify_url', '')) : ?>
						<li><a class="spotify_page" href="<?php echo of_get_option('spotify_url', ''); ?>" title="Spotify" target="_blank"></a></li>
						<?php endif;?>
						<?php if (of_get_option('lastfm_url', '')): ?>
						<li><a class="lastfm_page" href="<?php echo of_get_option('lastfm_url', ''); ?>" title="Last.fm" target="_blank"></a></li>	
						<?php endif;?>			
						</ul>
						<?php endif;?>

						</div><!--/navbar right-->
					
						
					</div> <!-- /container-->
					</div><!-- /navbar collapse -->
					
						
				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		
		</header> <!-- end header -->
		<div id="maincontainer">
					
					<div class="imagebackground">
					<!--CUSTOM HEADER IMAGE-->
					<div class="hidden-xs">
					<?php if (of_get_option('background_image')) : ?>
					<img src="<?php echo of_get_option('background_image', ''); ?>" class"responsive" width="100%">
					<?php endif;?>
					<div class="frontlead">
					<h1 style="color:<?php echo of_get_option('textcolor', '');?>;"><?php echo of_get_option('leadtext', '');?></h1>
					</div><!--/frontlead-->
					</div>
					
					<div class="visible-xs">
					<?php if (of_get_option('background_image_mobile')) : ?>
					<img src="<?php echo of_get_option('background_image_mobile', ''); ?>" class"responsive" width="100%">
					<?php endif;?>
					</div>
					</div><!--/imagebackground-->

		
		<div class="container-fluid">
