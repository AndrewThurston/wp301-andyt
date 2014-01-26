<?php
/* Template Name: Testing Page */

//print_r($wp_query); 
//get_header();?>

<!-- Why this no work?  :( -->
<link rel="stylesheet" href="style.css" type="text/css" media="screen">

<!-- Practicing loading ACF fields here -->
<h3><?php the_field('secondary_title'); ?> </h3>
<span class="disclaimer"> <?php the_field('disclaimer_text'); ?> </span>

<?php
if (is_page_template('tmp-testing.php')) {
	echo '<em><font color="blue"> yes this is the tmp-testing.php file </font></em>';
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

			echo "This post id is: \t";
			print $post->ID;
		} // end while
	} // end if


?>