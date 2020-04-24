<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AllesvdK-theme
 */

if( is_page( 'over-ons' ) ) {

	get_template_part('template-parts/pages/content', 'about');

} elseif( is_page( 'agenda' ) ) {

	get_template_part('template-parts/pages/content', 'agenda');

} else {
	get_template_part('template-parts/pages/content', 'contact');
}

?>
