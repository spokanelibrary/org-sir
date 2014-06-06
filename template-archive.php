<?php
/*
Template Name: Archive (Posts)
*/
?>



<div class="row">

	<div class="col-md-12">
		<?php //get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<?php
			$args = array( 'numberposts' => '20' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="page-header"><h1>'.$recent["post_title"].'</h1></div>';
				// todo: this should be an excerpt
				//echo $recent["post_excerpt"];
				
				$img = null;
	      $featured = wp_get_attachment_image_src( get_post_thumbnail_id($recent['ID']), 'thumbnail' );
	      $image_url = $featured[0];
	      if ( !empty($image_url) ) {
	        $img = '<a href="'.$link['url'].'" class="">
	                  <img src="'.$image_url.'" class="img-responsive img-rounded" alt="'.$recent['post_name'].'">
	                </a>'.PHP_EOL;
	        //$img = $image_url;
	      }	

	      echo $img;

				echo wpautop($recent["post_excerpt"]);

				echo '<p>';
				echo '<a href="' . get_permalink($recent['ID']) . '" title="Continue reading" >Continue reading &rarr;</a>';
				echo '</p>';
			}
		?>


	</div>

</div>