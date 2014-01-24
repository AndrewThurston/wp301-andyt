<?php
/* Template Name: Testing Page */

print_r($wp_query);

if (is_page_template('tmp-testing.php')) {
	echo '<em color=red><font color="blue"> yes this is the tmp-testing.php file </font></em>';
}

if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			print_r($post);

			echo "<pre>";
			echo "This post title is: \t";
			print $post->post_title;
			print_r("<br>The content is: \t");
			echo $post->post_content;
			echo "</pre>";

			the_field("hero_text");

		} // end while
	} // end if


?>