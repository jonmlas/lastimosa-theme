<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>
<?php
if (!empty($atts['tabs_class'])) : 
	$tabs_class = $atts['tabs_class'];
else :
	$tabs_class = '';
endif; 
?>
<div class="fw-tabs-container <?php echo esc_attr($tabs_class) ?>" id="<?php echo esc_attr($tabs_id); ?>">
	<div class="fw-tabs">
		<ul>
			<?php foreach ($atts['tabs'] as $key => $tab) : ?>
				<li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><?php echo $tab['tab_title']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
			<p><?php echo do_shortcode( $tab['tab_content'] ) ?></p>
		</div>
	<?php endforeach; ?>
</div>