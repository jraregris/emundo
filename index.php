﻿<?php 

get_header();

/** Title */
?>
<div class="top">
<div class="mainContent">
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php
/** Posts */
if(have_posts()){
	while (have_posts()) : the_post();
		echo("<h2>");
			echo('<a href="');
				the_permalink();
			echo('">');
				the_title();
			echo('</a>');
		echo("</h2>");
		echo('<p class="timestamp">');
			
         		the_time('d/m');
			echo("<br />");
                        the_time('Y');
                        echo("<br />");
			the_time();

		echo("</p>");
			the_content();
		echo('<p class="commentlink">');
			comments_popup_link('Comment!','A comment','% comments','commentlink','i like turtles');
		echo("</p>");
		endwhile;
} else {
	echo("<p>This plaec is empty and barren</p>");
}

if(is_single()){
comments_template();
}

?>
</div>
<?php
get_footer();