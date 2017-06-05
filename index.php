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
			<a class="button" href="work.html">Discover more</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
