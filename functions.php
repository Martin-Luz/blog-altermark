<?php
 add_theme_support( 'post-thumbnails' ); 

function max_title_length( $title, $max = 300 ) {
	return strlen( $title ) > $max ?
		substr( $title, 0, $max ) : $title;
}