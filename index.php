<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title("|", true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="icon" type="image/ico" href="http://jasonbruno.net/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head();
$theme_copy=get_option('theme_copy');
$theme_headline=get_option('theme_headline');
$headline=($theme_headline)?$theme_headline:get_bloginfo('name');

?>
</head>

<body <?php body_class( $class ); ?>>
<a href="<?php echo home_url();?>"><h1><?php echo $headline; ?></h1></a>
<?php

if(have_posts()){
while (have_posts()) : the_post(); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<hr><h2><?php the_title(); ?></h2><hr>
<?php
the_post_thumbnail();
the_content(); 
endwhile;
} else {
echo '
<hr><h2>Wrong!</h2><hr>
<p>
<a href="'.get_bloginfo( 'url' ).'">Click here to go to homepage</a>
</p>
';
/* to comply */
echo '<div id="post-'. get_the_ID().'" '. post_class().'></div>';
if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
comment_form();
wp_list_comments('');
paginate_comments_links();
wp_link_pages('');
paginate_links();
comments_template( $file, $separate_comments );
the_tags();
}

?>
<div id="footer-copyright">
<?php 
if ( is_active_sidebar( 'footer-widgets' ) ) {
dynamic_sidebar( 'footer-widgets' );
} else {
do_shortcode('[social-links]');
}

if($theme_copy) echo '<span class="copy">'.$theme_copy.'</span>';
?>
</div>
<?php wp_footer();?>
<script>
jQuery(document).ready(function () {
jQuery(window).resize();
});
jQuery(window).resize(function(){
height=jQuery(window).innerHeight()-40;
jQuery('body').css('min-height',height);
});
</script>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=7055857; 
var sc_invisible=1; 
var sc_security="b5c810e6"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<!-- End of StatCounter Code for Default Guide -->

</body>
</html>