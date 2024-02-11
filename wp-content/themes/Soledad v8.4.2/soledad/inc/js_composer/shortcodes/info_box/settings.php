<?php
$group_icon  = 'Icon';
$group_line  = 'Line';
$group_color = 'Typo & Color';

vc_map( array(
	'base'          => "penci_info_box",
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => penci_get_theme_name( 'Soledad' ),
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/info_box/frontend.php',
	'weight'        => 700,
	'name'          => penci_get_theme_name( 'Penci' ) . ' ' . __( 'Info Box', 'soledad' ),
	'description'   => __( 'Info Box Block', 'soledad' ),
	'controls'      => 'full',
	'params'        => array(
		array(
			'type'             => 'textfield',
			'param_name'       => 'gnr_setting_heading',
			'heading'          => esc_html__( 'General', 'soledad' ),
			'value'            => '',
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Sub Title', 'soledad' ),
			'param_name' => 'subtitle',
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Title', 'soledad' ),
			'param_name' => 'title_text',
		),
		array(
			'type'        => 'penci_switch',
			'heading'     => __( 'Use line below the title', 'soledad' ),
			'param_name'  => '_use_line',
			'true_state'  => 'yes',
			'false_state' => 'no',
			'default'     => 'no',
			'std'         => 'no',
		),
		array(
			'type'       => 'textarea',
			'heading'    => esc_html__( 'Content', 'soledad' ),
			'param_name' => 'description_text',
			'value'      => esc_html__( 'Insert your content here', 'soledad' )
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Icon position', 'soledad' ),
			'param_name' => 'icon_position',
			'value'      => array(
				esc_html__( 'Top left', 'soledad' )    => 'top-left',
				esc_html__( 'Top center', 'soledad' )  => 'top-center',
				esc_html__( 'Top right', 'soledad' )   => 'top-right',
				esc_html__( 'Float left', 'soledad' )  => 'float-left',
				esc_html__( 'Float right', 'soledad' ) => 'float-right'
			),
			'std'        => 'float-left',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'stitle_mar_top',
			'heading'          => __( 'Custom Margin Top for Sub Title', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'title_mar_top',
			'heading'          => __( 'Custom Margin Top for Title', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'title_mar_bottom',
			'heading'          => __( 'Custom Margin Bottom for Title', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'des_mar_top',
			'heading'    => __( 'Custom Margin Top for Description', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
		),

		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Icon type', 'soledad' ),
			'param_name' => 'icon_type',
			'value'      => array(
				esc_html__( 'Icon', 'soledad' )  => 'icon',
				esc_html__( 'Image', 'soledad' ) => 'image',
				esc_html__( 'Text', 'soledad' )  => 'text',
			),
			'group'      => 'Icon & Image'
		),
		array(
			'type'             => 'attach_image',
			'heading'          => esc_html__( 'Image', 'soledad' ),
			'param_name'       => 'image',
			'dependency'       => array( 'element' => 'icon_type', 'value' => 'image' ),
			'edit_field_class' => 'vc_col-sm-6',
			'group'            => 'Icon & Image'
		),
		array(
			'type'             => 'attach_image',
			'heading'          => esc_html__( 'Image hover', 'soledad' ),
			'param_name'       => 'image_hover',
			'dependency'       => array( 'element' => 'icon_type', 'value' => 'image' ),
			'group'            => 'Icon & Image',
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => __( 'Icon', 'soledad' ),
			'param_name'  => 'icon_fontawesome',
			'value'       => 'fa fa-adjust',
			'settings'    => array( 'emptyIcon' => false, 'iconsPerPage' => 100 ),
			'description' => __( 'Select icon from library.', 'soledad' ),
			'dependency'  => array( 'element' => 'icon_type', 'value' => 'icon' ),
			'group'       => 'Icon & Image'
		),
		array(
			'type'       => 'textfield',
			'heading'    => esc_html__( 'Icon Text', 'soledad' ),
			'value'      => esc_html__( '02', 'soledad' ),
			'dependency' => array( 'element' => 'icon_type', 'value' => 'text' ),
			'param_name' => 'icontext',
			'group'      => 'Icon & Image'
		),
		array(
			'type'             => 'dropdown',
			'heading'          => esc_html__( 'View', 'soledad' ),
			'param_name'       => 'icon_view',
			'value'            => array(
				esc_html__( 'Default', 'soledad' ) => 'default',
				esc_html__( 'Stacked', 'soledad' ) => 'stacked',
				esc_html__( 'Framed', 'soledad' )  => 'framed',
			),
			'group'            => 'Icon & Image',
			'dependency'       => array( 'element' => 'icon_type', 'value' => array( 'icon', 'text' ) ),
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'dropdown',
			'heading'          => esc_html__( 'Shape', 'soledad' ),
			'param_name'       => 'icon_shape',
			'value'            => array(
				esc_html__( 'Circle', 'soledad' ) => 'circle',
				esc_html__( 'Square', 'soledad' ) => 'square'
			),
			'group'            => 'Icon & Image',
			'dependency'       => array( 'element' => 'icon_view', 'value_not_equal_to' => 'default' ),
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Hover Animation', 'soledad' ),
			'param_name' => 'icon_hover_animation',
			'value'      => array(
				esc_html__( 'None', 'soledad' )           => '',
				esc_html__( 'Grow', 'soledad' )           => 'grow',
				esc_html__( 'Shrink', 'soledad' )         => 'shrink',
				esc_html__( 'Pulse', 'soledad' )          => 'pulse',
				esc_html__( 'Pulse Grow', 'soledad' )     => 'pulse-grow',
				esc_html__( 'Pulse Shrink', 'soledad' )   => 'pulse-shrink',
				esc_html__( 'Push', 'soledad' )           => 'push',
				esc_html__( 'Pop', 'soledad' )            => 'pop',
				esc_html__( 'Custom Style 1', 'soledad' ) => 'custom-1',
				esc_html__( 'Custom Style 2', 'soledad' ) => 'custom-2',
				esc_html__( 'Custom Style 3', 'soledad' ) => 'custom-3',
				esc_html__( 'Custom Style 4', 'soledad' ) => 'custom-4',
				esc_html__( 'Custom Style 5', 'soledad' ) => 'custom-5'
			),
			'group'      => 'Icon & Image',
			'dependency' => array( 'element' => 'icon_view', 'value_not_equal_to' => 'default' ),
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'icon_width',
			'heading'          => __( 'Width/Height for Box Contain Icon', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => 'Icon & Image',
			'edit_field_class' => 'vc_col-sm-6',
			'dependency'       => array( 'element' => 'icon_view', 'value_not_equal_to' => 'default' ),
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'icon_padding',
			'heading'          => __( 'Custom Padding for Icon', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'group'            => 'Icon & Image',
			'edit_field_class' => 'vc_col-sm-6',
			'dependency'       => array( 'element' => 'icon_view', 'value_not_equal_to' => 'default' ),
		),
		array(
			'type'        => 'vc_link',
			'heading'     => __( 'URL (Link)', 'soledad' ),
			'param_name'  => '_link',
			'description' => __( 'Add link to icon.', 'soledad' ),
		),


		// Line
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'pline_width',
			'heading'          => __( 'Line width', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'dependency'       => array( 'element' => '_use_line', 'value' => 'true', ),
			'edit_field_class' => 'vc_col-sm-6',
			'group'            => $group_line,
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'pline_height',
			'heading'          => __( 'Line height', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'dependency'       => array( 'element' => '_use_line', 'value' => 'true', ),
			'edit_field_class' => 'vc_col-sm-6',
			'group'            => $group_line,
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'line_margin_top',
			'heading'          => __( 'Margin top', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'dependency'       => array( 'element' => '_use_line', 'value' => 'true', ),
			'edit_field_class' => 'vc_col-sm-6',
			'group'            => $group_line,
		),
		array(
			'type'             => 'penci_responsive_sizes',
			'param_name'       => 'line_margin_bottom',
			'heading'          => __( 'Margin bototm', 'soledad' ),
			'value'            => '',
			'std'              => '',
			'suffix'           => 'px',
			'min'              => 1,
			'edit_field_class' => 'vc_col-sm-6',
			'dependency'       => array( 'element' => '_use_line', 'value' => 'true', ),
			'group'            => $group_line,
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Custom color for Line', 'soledad' ),
			'param_name'       => 'line_color',
			'group'            => $group_line,
			'edit_field_class' => 'vc_col-sm-6',
		),

		// Typo
		array(
			'type'             => 'textfield',
			'param_name'       => 'ib_typo_heading',
			'heading'          => esc_html__( 'Infor Box', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Background color', 'soledad' ),
			'param_name'       => 'ib_bgcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Borders color', 'soledad' ),
			'param_name'       => 'ib_bdcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'ib_borderwidth',
			'heading'    => __( 'Borders Width', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'ib_paddingleft',
			'heading'    => __( 'Padding Left & Right', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => 'ib_paddingtop',
			'heading'    => __( 'Padding Top & Bottom', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),

		array(
			'type'             => 'textfield',
			'param_name'       => 'icon_typo_heading',
			'heading'          => esc_html__( 'Icon', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon color', 'soledad' ),
			'param_name'       => 'icon_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon background color', 'soledad' ),
			'param_name'       => 'icon_bgcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon border color', 'soledad' ),
			'param_name'       => 'icon_border_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon hover color', 'soledad' ),
			'param_name'       => 'icon_hcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon hover background color', 'soledad' ),
			'param_name'       => 'icon_hbgcolor',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Icon hover border color', 'soledad' ),
			'param_name'       => 'icon_hborder_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		// Typo title
		array(
			'type'             => 'textfield',
			'param_name'       => 'stitle_typo_heading',
			'heading'          => esc_html__( 'Sub Title', 'soledad' ),
			'value'            => '',
			'group'            => $group_color,
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
		),
		array(
			'type'             => 'colorpicker',
			'heading'          => esc_html__( 'Sub Title color', 'soledad' ),
			'param_name'       => 'stitle_color',
			'group'            => $group_color,
			'edit_field_class' => 'vc_col-sm-6',
		),
		array(
			'type'       => 'google_fonts',
			'param_name' => '_stitle_typo',
			'value'      => '',
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => '_stitle_fsize',
			'heading'    => __( 'Font Size for Sub Title', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),

		array(
			'type'             => 'textfield',
			'param_name'       => 'title_typo_heading',
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
			'type'       => 'google_fonts',
			'param_name' => '_title_typo',
			'value'      => '',
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => '_title_fsize',
			'heading'    => __( 'Font Size for Title', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),

		// Content Typography
		array(
			'type'             => 'textfield',
			'param_name'       => '_content_typo_heading',
			'heading'          => esc_html__( 'Content', 'soledad' ),
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
			'param_name' => '_content_typo',
			'value'      => '',
			'group'      => $group_color,
		),
		array(
			'type'       => 'penci_responsive_sizes',
			'param_name' => '_content_fsize',
			'heading'    => __( 'Font Size for Content', 'soledad' ),
			'value'      => '',
			'std'        => '',
			'suffix'     => 'px',
			'min'        => 1,
			'group'      => $group_color,
		),
		array(
			'type'             => 'textfield',
			'param_name'       => 'extra_options',
			'heading'          => esc_html__( 'Extra Options', 'soledad' ),
			'value'            => '',
			'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
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
