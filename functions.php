<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_filter('widget_text', 'do_shortcode');

add_editor_style();

function social_links() {
$theme_fb=get_option('theme_fb');
$theme_tw=get_option('theme_tw');
$theme_li=get_option('theme_li');
$theme_gp=get_option('theme_gp');
if($theme_fb) echo '<a href="'.$theme_fb.'" target="_blank" class="footer-social"><i class="fa fa-facebook"></i></a>';
if($theme_tw) echo '<a href="'.$theme_tw.'" target="_blank" class="footer-social"><i class="fa fa-twitter"></i></a>';
if($theme_li) echo '<a href="'.$theme_li.'" target="_blank" class="footer-social"><i class="fa fa-linkedin"></i></a>';
if($theme_gp) echo '<a href="'.$theme_gp.'" target="_blank" class="footer-social"><i class="fa fa-google-plus"></i></a>';
}
add_shortcode( 'social-links', 'social_links' );

if ( ! isset( $content_width ) ) $content_width = 1000;

$args = array(
	'id'            => 'footer-widgets',
	'name'          => __( 'Footer Social Widgets', 'text_domain' ),
	'description'   => __( 'add [social-links]', 'text_domain' ),
);
register_sidebar( $args );

function setup_theme_admin_menus() {  
add_theme_page('The Landing Page Theme Options', 'Theme Options', 'manage_options', 'manage_options', 'manage_options');  
}  
function manage_options() {  
?>
<style>
.theme_options{
padding-left:10px;
}
.theme_options label{
width:100px;
display:inline-block;
}
.theme_options input[type=text], .theme_options select{
width:500px;
}
.theme_options input[type=submit]{
width:628px;
}
.theme_options fieldset{
border: 1px solid #eeeeee;
padding: 10px;
width: 605px;
margin-top:10px;
}
.theme_options legend{
font-size:18px;
margin-left:-10px;
}
#message{
width:608px;
padding:5px 10px;
}

</style>

<div class="wrap">  
<?php screen_icon('themes'); ?> <h2>Theme Settings</h2>
<?php
if (isset($_POST["update_settings"])) {  
echo '<div id="message" class="updated">Settings saved</div>  ';
}
if (isset($_POST["update_settings"])) {  
$theme_fb = esc_attr($_POST["theme_fb"]);     
$theme_tw = esc_attr($_POST["theme_tw"]);     
$theme_li = esc_attr($_POST["theme_li"]);     
$theme_gp = esc_attr($_POST["theme_gp"]);     
$theme_copy = esc_attr($_POST["theme_copy"]);     
$theme_headline = esc_attr($_POST["theme_headline"]);     

update_option("theme_fb", $theme_fb);  
update_option("theme_tw", $theme_tw);  
update_option("theme_li", $theme_li);  
update_option("theme_gp", $theme_gp);  
update_option("theme_copy", $theme_copy);  
update_option("theme_headline", $theme_headline);  

}
$theme_fb=get_option('theme_fb');
$theme_tw=get_option('theme_tw');
$theme_li=get_option('theme_li');
$theme_gp=get_option('theme_gp');
$theme_copy=get_option('theme_copy');
$theme_headline=get_option('theme_headline');
 
?>
<form method="POST" action="" class="theme_options"> 
<fieldset>
<legend>General Settings</legend>
<label for="theme_headline">Header Text</label>   
<input type="text" name="theme_headline" value="<?php echo $theme_headline ?>" /><br>  
<label for="theme_copy">Copyright Text</label>   
<input type="text" name="theme_copy" value="<?php echo $theme_copy ?>" /><br>
</fieldset>
<fieldset>
<legend>Social Networks</legend>
<label for="theme_fb">Facebook URL</label>   
<input type="text" name="theme_fb" value="<?php echo $theme_fb ?>" /><br>  
<label for="theme_tw">Twitter URL</label>   
<input type="text" name="theme_tw" value="<?php echo $theme_tw ?>" /><br>  
<label for="theme_li">LinkedIn URL</label>   
<input type="text" name="theme_li" value="<?php echo $theme_li ?>" /><br>  
<label for="theme_gp">Google Plus URL</label>   
<input type="text" name="theme_gp" value="<?php echo $theme_gp ?>" /><br>  
</fieldset>


<input style="margin-top:5px;" type="submit" value="Save settings" class="button-primary"/>  
<input style="margin-top:5px;" type="hidden" name="update_settings" value="Y" />  
</form>
</div>

<?php  
}
add_action("admin_menu", "setup_theme_admin_menus");  
?>