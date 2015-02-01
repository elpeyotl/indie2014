<?php
/*
Template Name: Agenda
*/
?>

<!-- LOAD ANGULAR -->
<script src="https://code.angularjs.org/1.3.3/angular.min.js"></script>
<script src="https://code.angularjs.org/1.3.3/angular-sanitize.min.js"></script>
<script src="https://code.angularjs.org/1.3.3/angular-animate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-moment/0.9.0/angular-moment.min.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/myapp.js"></script>

<!-- LOAD THE GET DATA PHP FUNCTION -->
<?php include( get_stylesheet_directory() . '/includes/getdata.php'); ?>

<!-- Send the returned content into a Javascript Variable -->
<script>var thedata = <?php echo $returned_content;?>;</script>


<?php get_header(); ?>
			
			<div id="content" class="clearfix row agendatop">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<?php endwhile; ?>	
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
					
				<div class="row" ng-app="MyApp" ng-controller="PostsCtrl">
					<div id="event_list" class="col col-lg-6">	
						
						<!-- SEARCH EVENT FIELD-->
						<div id="search-events">
							<span class="glyphicon glyphicon-search"></span>
							<input class="searchevents" ng-model="search" placeholder="Search events">
							<a href="" class="filter" ng-show="show" ng-click="clearFilter()"><span class="glyphicon glyphicon-remove"> </span> Reset Filter</a>
							<a href="" class="filter" ng-show="search" ng-click="clearFilter()"><span class="glyphicon glyphicon-remove"> </span> Reset Search</a>
						</div><!-- / search-->

						<div id="event_frame">	
						<h1 class="agenda_month">Events</h1>
						
						<!-- EVENT DETAIL -->
						<article role="article">
							<div ng-repeat="post in filteredPosts = (posts | orderBy:sort:reverse | filter:filters | filter:search)" class="event_list" 
							ng-click="$event.preventDefault(); select($index); loading[$index]=!loading[$index]" ng-class="{selected: $index == selected}">
								<header class="eventheader" id="{{post.ID}}">
									<div class="bigdatediv"><a href=""><h1><span class="bigdate">{{post.date | amDateFormat:'DD.MM'}}</span></h1></a></div>
									<span ng-show="loading[$index]" class="pull-right glyphicon glyphicon-remove remove hidden-lg"></span>
									<div class="eventtitlediv"><a href=""><h1><span class="eventtitle">{{post.title}}</span></h1></a>
									<span class="eventinfo"><a href="" ng-click="filters.location_name = post.location_name ; filtered()">
									<span class="location">{{post.location_name}}, </span></a>
									<a href="" ng-click="filters.location_city = post.location_city ; filtered()"><span class="ort">{{post.location_city}}</span></a>
									</span>
									</div>
								</header> <!-- end article header -->
								
								<div id="event_detail" class="col col-lg-6 event_list animate-show hidden-lg" ng-show="loading[$index]">
									<!-- SHOW THUMBNAIL-->
									<img class="agendathumb" ng-src="{{post.thumbnail[0]}}" />
									<!-- Output Event Detail in Full HTML-->
									<p class="postdetail" ng-bind-html='post.content_html'></p>
								</div><!-- /event_detail-->

							</div><!-- /ng-repeat-->	
								
							<!-- Show this if no results-->
								<span class="nothing" ng-show="!filteredPosts.length">
   							   		<strong><span class="glyphicon glyphicon-flash"></span>Ups! No results found...</strong>
 								</span>
						</article> <!-- end article -->
					</div><!--/event_frame-->			
				</div> <!-- event-list -->

				<!-- SHOW ONLY ON BIG SCREENS-->
				<div id="event_detail_big" class="col col-lg-6 event_list animate-show visible-lg">
					<h4 class="agenda_sub_title">{{filteredPosts[selected].title}}</h4> 
					<!-- SHOW THUMBNAIL-->
					<img class="agendathumb" ng-src="{{filteredPosts[selected].thumbnail[0]}}" />
					<!-- Output Event Detail in Full HTML-->
					<p ng-bind-html='filteredPosts[selected].content_html'></p>
				</div><!--/end event_detail-->
			</div> <!-- endrow-->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>