<?php 
	get_header();
?>

	<?php
		if ( is_page('list') ) {

		    $args = array(  
		        'post_type' => 'watercolor',
		        // 'post_status' => 'publish',
		        // 'posts_per_page' => 8, 
		        // 'orderby’ => 'title', 
		        // 'order’ => 'ASC', 
		    );

		    $loop = new WP_Query( $args ); 

		    echo "<inner-column>";
		        
		    while ( $loop->have_posts() ) : $loop->the_post(); 
		        include('templates/components/watercolor-swatch/template.php');
		    endwhile;

		    echo "</inner-column>";

		    wp_reset_postdata();

		}

		// do the same for pigments, and pigment families

		echo "<inner-column class='tight'>";


		if ( is_singular('watercolor') ) {

			include('templates/modules/watercolor-detail/template.php');
		}

		if ( is_singular('pigment') ) {

			include('templates/modules/pigment-detail/template.php');
		}

		 echo "</inner-column>";

	?>

<?php 
	get_footer();
?>