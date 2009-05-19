<?php 

get_header();

/** Title */
?>
<div class="top">
<div class="content">
<div class="header">
  <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</div>
<div class="mainContent">

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
			
         		the_time(); echo(" "); the_time('d-m'); echo("-"); the_time('Y');  

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

<div class="sidebar">


<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar() ) : ?>
<?php
endif;
?>
</div>
</div>
<?php
get_footer();