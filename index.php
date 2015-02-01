<?php get_header(); ?>
			<div id="content" class="row">
			
			<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
			</div>
			
			
				<!--Show if page is loaded-->
				<div id="showpage">
				<div id="ajaxcontent">
				<div id="main" role="main">
					
					<div class="col-sm-6 blogpost">
					<?php if (have_posts()) : //GET THE POSTS IN FIRST ROW?>
					<?php $counter = 0; // COUNTS THE POSTS ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $counter++;?>
					<?php if ($counter < 6) : ?>
					<div class="col-sm-12">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">	
						<header>											
							<div class="page-header"><h2><?php the_title(); ?></h2></div>
						</header> <!-- end article header -->
							<section class="post_content">
							<?php the_content(); ?>
							<?php // IF THERE IS A YOUTUBE ID SHOW IT
							$metadata = get_post_meta($post->ID, 'youtube_id', true);
							if (!empty($metadata)) :?>
							<p><iframe width='100%' height='315' src='https://www.youtube.com/embed/<?php echo $metadata;?>' frameborder='0'  								allowfullscreen></iframe></p>												
							<?php endif;?>
							
						<p class="meta"><time datetime="<?php echo the_time('d/m/Y'); ?>" pubdate><?php the_time('d/m/Y'); ?>
						</time>
						
						<!--SOCIAL ICONS-->
						<!--SOCIAL ICONS-->
						<ul class="socialicons">
						<li>
						<a class="facebook"href="#" 
		  onclick="
		    window.open(
		      'https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>', 
		      'facebook-share-dialog', 
		      'width=626,height=436');
		      return false;"></a></li> 
										
						<li><a class="tweet" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php echo the_title();?> – " title="Share it on Twitter" target="_blank"></a></li>
						</ul>
						</p>

						</section> <!-- end article section -->	
						
						<footer class"footer_tags">
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>	
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					</div> <!--/col-sm-12-->
					<?endif;?>
					<?php endwhile; ?>	
					</div> <!-- /col-sm-6-->
				    
				    <div class="col-sm-6 blogpost">
				    <?php if (have_posts()) : //GET POST FOR SECOND ROW ?>
					<?php $counter = 0; //COUNTS THE POSTS ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $counter++;?>
				    <?php if($counter > 5) :?>
					<div class="col-sm-12">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>								
							<div class="page-header"><h2><?php the_title(); ?></h2></div>
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
							
							<?php // IF THERE IS A YOUTUBE ID SHOW IT
							$metadata = get_post_meta($post->ID, 'youtube_id', true);
							if (!empty($metadata)) :?>
							<p><iframe width='100%' height='315' src='https://www.youtube.com/embed/<?php echo $metadata;?>' frameborder='0'  								allowfullscreen></iframe></p>												
							<?php endif;?>
							
						<p class="meta"><time datetime="<?php echo the_time('d/m/Y'); ?>" pubdate><?php the_time('d/m/Y'); ?>
						</time>
						
						<!--SOCIAL ICONS-->
						<ul class="socialicons">
						<li>
						<a class="facebook"href="#" 
		  onclick="
		    window.open(
		      'https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink();?>', 
		      'facebook-share-dialog', 
		      'width=626,height=436'); 
		    return false;"></a></li>
										
						<li><a class="tweet" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php echo the_title();?> – " title="Share it on Twitter" target="_blank"></a></li>
						</ul>
							
						</p>

						</section> <!-- end article section -->	
						
						<footer class"footer_tags">
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					</div> <!--/col-sm-12-->
				    <?php endif;?>
				    <?php endwhile;?>
				    <?php endif;?>
				    </div> <!-- /col-sm-6-->
				    
				    
				    
					
					
										
					<div class="col-sm-12 pagernav">
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager" id="pagination">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
					</div><!--/col-sm-12-->
					
					

			
					</div> <!-- end #main -->
				</div><!-- ajaxcontent-->
			</div><!--showpage-->
    
    
			</div> <!-- end #content -->

<?php get_footer(); ?>