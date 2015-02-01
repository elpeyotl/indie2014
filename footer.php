			
		
		</div> <!-- end #container -->
		
		<div class="footerbar">
		<div class="container-fluid">
		<footer class="mainfooter" role="contentinfo">
				<div id="inner-footer" class="clearfix">
		          <div id="widget-footer" class="clearfix row">
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		            <?php endif; ?>
		            
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : ?>
		            <?php endif; ?>
		            
		          
		          
		          </div><!--/widget footer-->					
																
				</div> <!-- end #inner-footer -->
				
				
			</footer> <!-- end footer -->
			</div><!--/container-fluid-->
		</div><!--/footerbar-->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/custom.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-1.7.1.min.js"></script>	
		<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>	

	</body>

</html>