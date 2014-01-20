/*
Theme Name: Jason Bruno Landing Page
Theme URI: http://jasonbruno.net/the-landing-page-wordpress-theme/
Author: Jason Bruno
Description: This is very unique fluid-responsive theme. Amongst its current Features are: Built for Unlinked Multiple Landing Pages, Minimalistic Design, No Images Used – Pure CSS, Uses FontAwesome v4.0.3, Fluid Width Layout, and it is Compatible With Most Popular Plugins. The Landing Page WordPress Theme boasts a very unique feat of establishing a full theme with a Theme Options page at under 35kb[3 active files].
Author URI: http://jasonbruno.net
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: responsive, gray, no-image, css, small, fluid, jason bruno
*/
*{
	font-family: 'Alegreya Sans', sans-serif;
	color:#444444;
}
html{
	margin:0;
	background:#f5f5f5;
}
body{
	padding:20px 10%;
	margin:0 10%;
	background:#ffffff;
/*	min-height:1000px;*/
-webkit-box-shadow: 0 0 3px 3px #999999;
box-shadow: 0 0 3px 3px #999999;
}
h1{
	text-align:center;
	font-size:60px;
	margin:0;
}
h2{
	text-align:center;
	font-size:30px;
	margin:0;
}
a{
	text-decoration:none;
	font-weight:bold;
}
a:hover{
	text-decoration:none;
}
p{
	text-align:justify;
}
input, .wpcf7-captchac, textarea{
width:90%;
margin-left:10%;
}
p img{
width:100%;
height:auto;
}
p img.alignright{
width:50%;
height:auto;
float:right;
margin-left:10px;
}
p img.alignleft{
width:50%;
height:auto;
float:left;
margin-right:10px;
}
.half{
width:46%;
margin:0 2%;
}
.left {
float:left;
margin: 0 0 4% 0;
}
.right{
float:right;
margin: 0 4% 0 0;
}
.clear{
clear:both;
}
.ajax-loader{
width:20px;
height:auto;
}
#footer-copyright{
	text-align:center;
	margin:40px 0 0;
}
#footer-copyright .copy{
	margin-top:3px;
	display:block;
	clear:both;
}
.footer-social{
	font-size:20px;
	padding:20px;
	margin:0 10px 10px;
	border:1px solid #444444;
	height:20px;
	width:20px;
	display:inline-block;
-webkit-border-radius: 60px;
border-radius: 60px;
-webkit-transition: background 500ms ease;
-moz-transition: background 500ms ease;
-ms-transition: background 500ms ease;
-o-transition: background 500ms ease;
transition: background 500ms ease;
}

.footer-social:hover{
	background:#444444;
}
.footer-social:hover i{
	color:#ffffff !important;
}


@media only screen and (max-width: 780px) {
body{
padding:20px 7%;
margin:0 4%;
}
p img{
width:100%;
height:auto;
}
p img.alignright{
width:100%;
margin-left:0px;
}
p img.alignleft{
width:100%;
margin-right:0px;
}
.half{
width:100%;
float:none !important;
}

.footer-social{
margin:0 20px 10px;
}
}