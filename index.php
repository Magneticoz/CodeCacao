<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage CodeCacao
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="work" class="black-bg white">
	<div class="divider"></div>
	<div class="spacer-xsmall"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
				<?php
					// Get number of projects to display
					$projectsNum = get_option('posts_per_page');
					$args = array(
						'posts_per_page' => $projectsNum,
						'offset'           => 0,
						'orderby'          => 'date',
						'order'            => 'DESC',
						'post_type'        => 'projects',
						'post_status'      => 'publish',
						'suppress_filters' => false,
					);
					$projects_array = get_posts( $args );
					$projectOut = "";
					foreach($projects_array as $project){
						$projectID = $project->ID;
						$projectOut .= 	'<div class="col-sm-6">'."\n".
														'	<a href="'.get_the_permalink($projectID).'" target="_blank" alt="'.get_the_title($projectID).'">'."\n".
														'	<img class="img-responsive" src="'.wp_get_attachment_url( get_post_thumbnail_id($projectID)).'">'."\n".
														'	<p class="caption">'.get_the_excerpt($projectID).'</p>'."\n".
														'</div>';
					};
					
					echo $projectOut;
				?>
				</div>
			</div>
		</div><!-- /row -->
		<div class="row text-center">
			<a class="button" href="https://www.codecacao.com/work.html">Discover more</a>
		</div>
	</div>
</section>

<?php
$newsHeadline = cfs_get_option( 'homepage-options', 'homepage_news_title' );
$newsArticles = cfs_get_option( 'homepage-options', 'homepage_news' );
if($newsHeadline != "" && !empty($newsArticles)){
?>
	<section id="news" class="black-bg white">
		<div class="spacer"></div>
		<div class="container">
			<div class="row">
				<p class="heading-small yellow">news</p>
				<h2><?php echo $newsHeadline; ?></h2>
				<div class="spacer"></div>
			</div>
		</div>
		<?php
			$newsOut = "";
			$newsColor = "";
			$newsNum = 0;
			foreach($newsArticles as $news){
				$newsOut .= 	'<div class="col-sm-6 col-md-4 box border-box">';
				if($news['homepage_simple_box'] === 1){
					if($news['homepage_box_color'] != ""){
						$newsColor .= '.news-box-content-'.$newsNum.' {color:'.$news['homepage_box_color'].'}';
					}
					$newsOut .= 	'	<p class="heading-small">'.$news['homepage_simple_box_header'].'</p>'."\n".
												'	<p class="num-big news-box-content news-box-content-'.$newsNum.'">'.$news['homepage_simple_box_big'].'<span class="h3">'.$news['homepage_simple_box_small'].'</span></p>';
				}else{
					if($news['homepage_box_color'] != ""){
						$newsColor .= '.news-box-content-'.$newsNum.' a{color:'.$news['homepage_box_color'].'}';
					}
					$newsOut .= 	'	<p class="medium news-box-link news-box-content-'.$newsNum.'">'.$news['homepage_detailed_box_content'].'</p>';
				}
				$newsOut .= 	'	<p class="date">'.$news['simple_box_footer'].'</p>'."\n".
											'</div>';
				$newsNum = $newsNum+1;
			}																						 
		?>
		<div class="row news-grid-row">
			<?php 
				if($newsColor != ""){
					echo '<style>'.$newsColor.'</style>';
				}																	 
				echo $newsOut; 
			?>
		</div>
	</section>
<?php
}
?>
<?php get_footer(); ?>
