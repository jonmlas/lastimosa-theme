<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'tab_layout' => array(
		'title'   => __( 'Layout', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'border'                    => array(
				'label'   => __( 'Border', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'desc'    => __( 'Add a border around the section',
					'unyson' ),
				'choices' => array(
					''  => '---',
					'full-border' => __( 'full borders', 'unyson' ),
					'top-bottom-border' => __( 'top & bottom borders only', 'unyson' ),
					'left-right-border' => __( 'left & right borders only', 'unyson' ),
					'top-border' => __( 'top border only', 'unyson' ),
					'bottom-border' => __( 'bottom border only', 'unyson' ),
					'left-border' => __( 'left border only', 'unyson' ),
					'right-border' => __( 'right border only', 'unyson' ),
				),
			),
		),
	),
	'tab_bg' => array(
		'title'   => __( 'Background', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'background' => options_bg_atts('Column')
		),
	),	
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'margin' 	=> lastimosa_options_box('Margin'),
			'padding' 	=> lastimosa_options_box('Padding'),
			'custom_id' => lastimosa_options_custom_id(),
			'class' 	=> lastimosa_options_class(),
		),
	),		
);