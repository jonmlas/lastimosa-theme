<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if( $atts['icon']['type'] == 'none' ) return;

if( !empty($atts['style']['selected']) ) {
	$style = preg_replace('/[0-9]+/', '', $atts['style']['selected']);
	$icon_wrap = $style;
	if( $style == 'aligncenter' )						$icon_wrap = $style . ' text-center mb-2';
}				

if( $atts['icon']['type'] == 'icon-font' ) {
	$icon_class[] = $atts['icon']['icon-class'];
	if( !empty($atts['icon_size'])) 					$icon_class[] = $atts['icon_size'];
	if( !empty($atts['icon_color'])) 					$icon_class[] = $atts['icon_color'];
	$icon_attr['class'] = join(' ', $icon_class);
	$content = lastimosa_html_tag('p', array( 'class' => $icon_wrap ), lastimosa_html_tag('i', $icon_attr));
}elseif( $atts['icon']['type'] == 'custom-upload' ) {
	//$icon_attr['src'] = $atts['icon']['url'];
	//$icon = lastimosa_html_tag('img',$icon_attr, false);
	$icon_class[] = 'img-fluid';
	$content = wp_get_attachment_image($atts['icon']['attachment-id'], 'full', '', $icon_class );
}

if( !empty($atts['title']) ) {
	$title_class[] = 'title';
	if( !empty($atts['title_size'])) 					$title_class[] = $atts['title_size'];
	if( !empty($atts['title_color'])) 					$title_class[] = $atts['title_color'];
	if( in_array( $atts['style']['selected'], array( 'alignleft2', 'alignright2' ) ) )	$title_class[] = 'clearfix';
	$title_attr['class'] = join(' ', $title_class);
	$content .= lastimosa_html_tag( $atts['css_tag'], $title_attr, $atts['title'] );
}
if( !empty( $atts['content'] ) )	$content .= '<p>' . $atts['content'] . '</p>';

$class[] = 'icon-box';
if( !empty( $atts['text_alignment'] ) )					$class[] = $atts['text_alignment'];
if(in_array( $atts['style']['selected'], array( 'alignleft', 'alignright' ) ) )	$class[] = 'overflow-fix';
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
$attr = array();
if( !empty($class)) 									$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );
echo lastimosa_html_tag( 'div', $attr, $content );