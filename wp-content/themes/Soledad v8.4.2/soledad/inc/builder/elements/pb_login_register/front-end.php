<?php
echo '<div class="pc-header-element penci-topbar-social pc-login-register"><ul class="pctopbar-login-btn">';
if ( is_user_logged_in() ) {
	// Get the URLs
	$logged_in_array = array();
	if ( current_user_can( 'manage_options' ) ) {
		$logged_in_array['dashboard'] = array(
			'icon' => 'fas fa-cog',
			'link' => admin_url(),
			'text' => penci_get_setting( 'penci_trans_dashboard_text' ),
		);
	}

	$parent_slug = get_theme_mod( 'penci_frontend_submit_account_slug', 'account' );

	$logged_in_array['profile'] = array(
		'icon' => 'far fa-user-circle',
		'link' => esc_url( home_url( '/' ) . $parent_slug . '/' . get_theme_mod( 'penci_frontend_submit_edit_account_slug', 'edit-account' ) ),
		'text' => penci_get_setting( 'penci_trans_profile_text' ),
	);

	$logged_in_array = apply_filters( 'penci_logged_in_items', $logged_in_array );

	$logged_in_array['logout'] = array(
		'icon' => 'fa-sign-out',
		'link' => wp_logout_url( home_url() ),
		'text' => penci_get_setting( 'penci_trans_logout_text' ),
	);

	$current_user = wp_get_current_user();


	$link_login = get_author_posts_url(  get_current_user_id() );
	if ( class_exists( 'WooCommerce' ) ) {
		$myaccount_page = get_option( 'woocommerce_myaccount_page_id' );
		if ( $myaccount_page ) {
			$link_login = get_permalink( $myaccount_page );
		}

	}


	$avatar_html = get_avatar( get_current_user_id(), '22' );

	echo '<li class="pclogin-item"><a href="' . $link_login . '">' . $avatar_html . ' ' . $current_user->display_name . '</a><ul class="pclogin-sub">';
	foreach ( $logged_in_array as $lgkey => $lgval ) {
		$lgicon = penci_icon_by_ver( $lgval["icon"] );
		$lglink = $lgval["link"];
		$lgtext = $lgval["text"];
		echo '<li class="pclogin-item-child pclogin-child-' . $lgkey . '"><a href="' . $lglink . '">' . $lgicon . $lgtext . '</a></li>';
	}
	echo '</ul></li>';

} else {
	$custom_text = '';
	if ( penci_get_builder_mod( 'penci_header_pb_login_register_penci_tblogin_text' ) ) {
		$custom_text = '<span>' . penci_get_builder_mod( 'penci_header_pb_login_register_penci_tblogin_text' ) . '</span>';
	}

	echo '<li class="pclogin-item login login-popup penci-login-popup-btn"><a href="#penci-login-popup">' . penci_icon_by_ver( 'far fa-user-circle' ) . $custom_text . '</a></li>';
}

echo '</ul></div>';

add_filter( 'theme_mod_penci_tblogin', function () {
	return true;
} );
