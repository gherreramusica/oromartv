<?php
$group_icon  = 'Icon';
$group_color = 'Typo & Color';

vc_map( array(
	'base'          => "penci_fancy_heading",
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => penci_get_theme_name( 'Soledad' ),
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/fancy_heading/frontend.php',
	'weight'        => 700,
	'name'          => penci_get_theme_name( 'Penci' ) . ' ' . __( 'Fancy Heading', 'soledad' ),
	'description'   => 'Fancy Heading Block',
	'controls'      => 'full',
	'params'        => array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Text Align', 'soledad' ),
			'param_name' => '_text_align',
			'std'        => 'center',
			'value'      => array(
				esc_html__( 'Left', 'soledad' )   => 'left',
				esc_html__( 'Center', 'soledad' ) => 'center',
				esc_html__( 'Right', 'soledad' )  => 'right',
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Subtitle:', 'soledad' ),
			'param_name' => 'p_subtitle',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Subtitle tag', 'soledad' ),
			'param_name' => 'subtitle_tag',
			'std'        => 'div',
			'value'      => array(
				'h1'   => 'h1',
				'h2'   => 'h2',
				'h3'   => 'h3',
				'h4'   => 'h4',
				'h5'   => 'h5',
				'h6'   => 'h6',
				'span' => 'span',
				'p'    => 'p',
				'div'  => 'div',
			),
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Subtitle position', 'soledad' ),
			'param_name' => 'subtitle_pos',
			'std'        => 'above',
			'value'      => array(
				esc_html__( 'Above the title', 'soledad' )     => 'above',
				esc_html__( 'Below the title', 'soledad' )     => 'below',
				esc_html__( 'Below the separator', 'soledad' ) => 'belowline',
			),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'subtitle_margin_top',
			'heading'    => __( 'Custom margin top for subtitle', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'subtitle_margin_bottom',
			'heading'    => __( 'Custom margin bottom for subtitle', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'subtitle_width',
			'heading'    => __( 'Custom width for subtitle', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Title:', 'soledad' ),
			'param_name'  => 'p_title',
			'admin_label' => true,
			'value'       => esc_html__( 'This is custom heading element', 'soledad' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Title tag', 'soledad' ),
			'param_name' => 'title_tag',
			'std'        => 'h2',
			'value'      => array(
				'h1'   => 'h1',
				'h2'   => 'h2',
				'h3'   => 'h3',
				'h4'   => 'h4',
				'h5'   => 'h5',
				'h6'   => 'h6',
				'span' => 'span',
				'p'    => 'p',
				'div'  => 'div',
			),
		),
		array(
			'type'       => 'vc_link',
			'heading'    => esc_html__( 'URL for title', 'js_composer' ),
			'param_name' => 'title_link'
		),
		array(
			'type'        => 'penci_switch',
			'heading'     => __( 'Add Lines on Left & Right of Title?', 'soledad' ),
			'param_name'  => 'add_line',
			'true_state'  => 'yes',
			'false_state' => 'no',
			'default'          => 'no',
			'std'              => 'no',
		),
		array(
			'type'       => 'penci_slider',
			'heading'    => __( 'Lines Height', 'soledad' ),
			'param_name' => 'lines_height',
			'dependency' => array( 'element' => 'add_line', 'value' => 'yes' ),
		),
		array(
			'type'       => 'penci_slider',
			'heading'    => __( 'Lines Width', 'soledad' ),
			'param_name' => 'lines_width',
			'dependency' => array( 'element' => 'add_line', 'value' => 'yes' ),
		),
		array(
			'type'       => 'penci_slider',
			'heading'    => __( 'Lines Spacing', 'soledad' ),
			'param_name' => 'lines_spacing',
			'dependency' => array( 'element' => 'add_line', 'value' => 'yes' ),
		),
		array(
			'type'        => 'penci_switch',
			'heading'     => __( 'Turn on upppearcase for title', 'soledad' ),
			'param_name'  => 'turn_on_title',
			'true_state'  => 'yes',
			'false_state' => 'no',
			'default'          => 'no',
			'std'              => 'no',
		),
		array(
			'type'        => 'penci_switch',
			'heading'     => __( 'Use separator', 'soledad' ),
			'param_name'  => '_use_separator',
			'true_state'  => 'yes',
			'false_state' => 'no',
			'default'          => 'no',
			'std'              => 'no',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Style', 'soledad' ),
			'param_name'  => 'separator_style',
			'value'       => array(
				'Border' => 'border',
				'Dashed' => 'dashed',
				'Dotted' => 'dotted',
				'Double' => 'double'
			),
			'std'         => 'border',
			'description' => __( 'Separator display style.', 'soledad' ),
			'dependency'  => array( 'element' => '_use_separator', 'value' => 'yes', ),
		),
		array(
			'type'        => 'penci_switch',
			'heading'     => __( 'Add separator icon?', 'soledad' ),
			'param_name'  => 'add_separator_icon',
			'dependency'  => array( 'element' => 'separator_style', 'value_not_equal_to' => 'double' ),
			'true_state'  => 'yes',
			'false_state' => 'no',
			'default'     => 'yes',
			'std'         => 'yes',
		),
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Separator Border width', 'soledad' ),
			'param_name'  => 'separator_border_width',
			'value'       => array(
				'1px'  => '',
				'2px'  => '2',
				'3px'  => '3',
				'4px'  => '4',
				'5px'  => '5',
				'6px'  => '6',
				'7px'  => '7',
				'8px'  => '8',
				'9px'  => '9',
				'10px' => '10',
			),
			'description' => __( 'Select border width (pixels).', 'soledad' ),
			'dependency'  => array( 'element' => '_use_separator', 'value' => 'yes', ),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'separator_width',
			'heading'    => __( 'Separator width', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'dependency' => array( 'element' => '_use_separator', 'value' => 'yes', ),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'separator_margin_top',
			'heading'    => __( 'Custom margin top for Separator', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'content_margin_top',
			'heading'    => __( 'Custom margin top for Content', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'content_width',
			'heading'    => __( 'Custom width for Content', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),
		array(
			'type'       => 'textarea_html',
			'holder'     => 'div',
			'heading'    => __( 'Content', 'soledad' ),
			'param_name' => 'content',
			'value'      => __( '<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>', 'soledad' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => __( 'Icon', 'soledad' ),
			'param_name'  => 'p_icon',
			'value'       => 'fas fa-star',
			'settings'    => array(
				'emptyIcon'    => false,
				'iconsPerPage' => 1000,
			),
			'description' => __( 'Select icon from library.', 'soledad' ),
			'group'       => $group_icon,
			'dependency'  => array( 'element' => 'add_separator_icon', 'value' => 'yes', ),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'icon_size',
			'heading'    => __( 'Size Icon', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_icon,
			'dependency' => array( 'element' => 'add_separator_icon', 'value' => 'yes', ),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'p_icon_martop',
			'heading'    => __( 'Custom margin top and bottom for Icon', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_icon,
			'dependency' => array( 'element' => 'add_separator_icon', 'value' => 'yes', ),
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'p_icon_marlr',
			'heading'    => __( 'Custom margin right and left for Icon', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_icon,
			'dependency' => array( 'element' => 'add_separator_icon', 'value' => 'yes', ),
		),

		// Color and typo
		array(
			'type'             => 'textfield',
			'param_name'       => '_title_typo_heading',
			'heading'          => esc_html__( 'Title', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Title color', 'soledad' ),
			'param_name'       => 'title_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Title hover color', 'soledad' ),
			'param_name'       => 'title_hcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'google_fonts',
			'group'      => $group_color,
			'param_name' => '_title_typo',
			'value'      => '',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => '_title_fsize',
			'heading'          => __( 'Font Size for Title', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'title_md_fsize',
			'heading'          => __( 'Font Size for Title on Tablet', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'title_sm_fsize',
			'heading'          => __( 'Font Size for Title on Tablet Small', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'title_xs_fsize',
			'heading'          => __( 'Font Size for Title on Tablet Mobile', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),

		// Typo Sub title
		array(
			'type'             => 'textfield',
			'param_name'       => '_subtitle_typo_heading',
			'heading'          => esc_html__( 'Subtitle Typography', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Subtitle color', 'soledad' ),
			'param_name'       => 'subtitle_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'google_fonts',
			'group'      => $group_color,
			'param_name' => '_subtitle_typo',
			'value'      => '',
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => '_subtitle_fsize',
			'heading'    => __( 'Font Size for Subtitle', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Custom icon color for Separator', 'soledad' ),
			'param_name'       => '_separator_icon_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Custom border color for Separator', 'soledad' ),
			'param_name'       => '_separator_border_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),

		// Description Typography
		array(
			'type'             => 'textfield',
			'param_name'       => '_desc_typo_heading',
			'heading'          => esc_html__( 'Description Typography', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'       => 'colorpicker',
			'heading'    => esc_html__( 'Content color', 'soledad' ),
			'param_name' => '_content_color',
			'group'      => $group_color,
		),
		array(
			'type'       => 'google_fonts',
			'param_name' => '_desc_typo',
			'value'      => '',
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => '_desc_fsize',
			'heading'    => __( 'Font Size for Description', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),

		vc_map_add_css_animation(),

		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'soledad' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'soledad' ),
		),
		array(
			'type'       => 'css_editor',
			'heading'    => __( 'CSS box', 'soledad' ),
			'param_name' => 'css',
			'group'      => __( 'Design Options', 'soledad' ),
		),
		penci_get_vc_responsive_spacing_map(),
	)
) );
