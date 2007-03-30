<?php
/*
Plugin Name: Category Remindr
Plugin URI: http://cosaspoposas.com
Description: Util si siempre te olvidas de categorizar tus posts
Version: 1.0
Author: L!nk
Author URI: http://cosaspoposas.com
*/
//Idioma ( es:espanol en:ingles ol:personalizado ) | Language (es:spanish en:english ol:custom )
$lang = "es";

//Color del fondo ( hex/nombre ) "rand" genera un color aleatorio cada vez | Background color ( hex/name ) "rand" makes a new color each time
function cssglob() {
$fondo = "rand";
//No tocar vvv | Do not touch vvv
$r = rand(128,255); 
$g = rand(128,255); 
$b = rand(128,255); 
if ( $fondo == "rand" ) {
$coloor = "#" . dechex($r) . dechex($g) . dechex($b); }
else { $coloor = "$fondo"; }
//No tocar mas abajo | Do not touch under this line
		echo "
		<style type=\"text/css\">
		#post .wrap #poststuff .catrem {
	background-image: url(http://img48.imageshack.us/img48/7931/sinttulo2st7.gif);
	background-color: $coloor;
	display: block;
	height: 39px;
	width: 509px;
	float: right;
	font-size: 21px;
	padding-top: 17px;
	padding-right: 10px;
	margin-top: 0px;
	text-align: center;
	padding-bottom: 10px;
	background-repeat: no-repeat;
	background-position: right center; 

		</style>"; } 
		
	if ( $lang == "es" ) {
            function catrem() {
		echo '<h1 align="right" class="catrem">¿Te has acordado de las categorias?</h1>';
	} }
	if ( $lang == "en" ) {
            function catrem() {
		echo '<h1 align="right" class="catrem">Have you selected the Categories?</h1>';
	} }
	if ( $lang == "ol" ) {
            function catrem() {
		echo '<h1 align="right" class="catrem">¡¡¡¡Insert custom text here!!!!</h1>';
	} }
	add_action('edit_form_advanced', 'cssglob');
	add_action('simple_edit_form', 'cssglob');
	add_action('edit_form_advanced', 'catrem');
	add_action('simple_edit_form', 'catrem');
?>