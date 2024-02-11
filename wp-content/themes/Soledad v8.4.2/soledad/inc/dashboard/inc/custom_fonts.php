<?php
if ( ! function_exists( 'penci_soledad_add_custom_fonts' ) ) {
	function penci_soledad_add_custom_fonts() {
		$font_1      = penci_get_option( 'soledad_custom_font1' );
		$fontfamily1 = penci_get_option( 'soledad_custom_fontfamily1' );
		$font_2      = penci_get_option( 'soledad_custom_font2' );
		$fontfamily2 = penci_get_option( 'soledad_custom_fontfamily2' );
		$font_3      = penci_get_option( 'soledad_custom_font3' );
		$fontfamily3 = penci_get_option( 'soledad_custom_fontfamily3' );

		$font_4      = penci_get_option( 'soledad_custom_font4' );
		$fontfamily4 = penci_get_option( 'soledad_custom_fontfamily4' );

		$font_5      = penci_get_option( 'soledad_custom_font5' );
		$fontfamily5 = penci_get_option( 'soledad_custom_fontfamily5' );

		$font_6      = penci_get_option( 'soledad_custom_font6' );
		$fontfamily6 = penci_get_option( 'soledad_custom_fontfamily6' );

		$font_7      = penci_get_option( 'soledad_custom_font7' );
		$fontfamily7 = penci_get_option( 'soledad_custom_fontfamily7' );

		$font_8      = penci_get_option( 'soledad_custom_font8' );
		$fontfamily8 = penci_get_option( 'soledad_custom_fontfamily8' );

		$font_9      = penci_get_option( 'soledad_custom_font9' );
		$fontfamily9 = penci_get_option( 'soledad_custom_fontfamily9' );

		$font_10      = penci_get_option( 'soledad_custom_font10' );
		$fontfamily10 = penci_get_option( 'soledad_custom_fontfamily10' );

		$output = '';

		if ( $font_1 && $fontfamily1 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily1 ), esc_attr( $fontfamily1 ), esc_attr( $font_1 )
			);
		}

		if ( $font_2 && $fontfamily2 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily2 ), esc_attr( $fontfamily2 ), esc_attr( $font_2 )
			);
		}

		if ( $font_3 && $fontfamily3 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily3 ), esc_attr( $fontfamily3 ), esc_attr( $font_3 )
			);
		}

		if ( $font_4 && $fontfamily4 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily4 ), esc_attr( $fontfamily4 ), esc_attr( $font_4 )
			);
		}

		if ( $font_5 && $fontfamily5 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily5 ), esc_attr( $fontfamily5 ), esc_attr( $font_5 )
			);
		}

		if ( $font_6 && $fontfamily6 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily6 ), esc_attr( $fontfamily6 ), esc_attr( $font_6 )
			);
		}

		if ( $font_7 && $fontfamily7 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily7 ), esc_attr( $fontfamily7 ), esc_attr( $font_7 )
			);
		}

		if ( $font_8 && $fontfamily8 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily8 ), esc_attr( $fontfamily8 ), esc_attr( $font_8 )
			);
		}

		if ( $font_9 && $fontfamily9 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily9 ), esc_attr( $fontfamily9 ), esc_attr( $font_9 )
			);
		}

		if ( $font_10 && $fontfamily10 ) {
			$output .= sprintf( ' @font-face {font-family: "%s";font-display: swap;src: local("%s"), url("%s") format("woff");}',
				esc_attr( $fontfamily10 ), esc_attr( $fontfamily10 ), esc_attr( $font_10 )
			);
		}

		echo $output;
	}
}

if ( ! function_exists( 'penci_soledad_list_self_fonts' ) ) {
	function penci_soledad_list_self_fonts() {
		if ( ! get_theme_mod( 'penci_disable_default_fonts' ) || get_theme_mod( 'penci_disable_all_fonts' ) ) {
			return;
		}

		$array_fonts = [];

		if ( ! get_theme_mod( 'penci_font_for_title' ) ) {
			$array_fonts[] = array_merge( $array_fonts, array( '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif' ) );
		} else {
			$array_fonts[] = get_theme_mod( 'penci_font_for_title' );
		}
		if ( get_theme_mod( 'penci_font_for_body' ) ) {
			$array_fonts[] = get_theme_mod( 'penci_font_for_body' );
		} else {
			$array_fonts[] = array_merge( $array_fonts, array( '"PT Serif", "regular:italic:700:700italic", serif' ) );
		}
		if ( get_theme_mod( 'penci_font_for_slogan' ) ) {
			$array_fonts[] = get_theme_mod( 'penci_font_for_slogan' );
		}
		if ( get_theme_mod( 'penci_font_for_menu' ) ) {
			$array_fonts[] = get_theme_mod( 'penci_font_for_menu' );
		}

		$font_url = get_template_directory_uri() . '/fonts';
		ob_start();
		?>
		<?php if ( !empty($array_fonts) && in_array( '"Raleway", "100:200:300:regular:500:600:700:800:900", sans-serif', $array_fonts ) ): ?>
            @font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 300;src: local('Raleway Light Italic'), local(Raleway-LightItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw5qN_DNCb_Vo.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 300;src: local('Raleway Light Italic'), local(Raleway-LightItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw5qN_AtCb.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 400;src: local('Raleway Italic'), local(Raleway-Italic), url(<?php echo $font_url; ?>/raleway/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 400;src: local('Raleway Italic'), local(Raleway-Italic), url(<?php echo $font_url; ?>/raleway/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 500;src: local('Raleway Medium Italic'), local(Raleway-MediumItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgwvqJ_DNCb_Vo.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 500;src: local('Raleway Medium Italic'), local(Raleway-MediumItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgwvqJ_AtCb.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 700;src: local('Raleway Bold Italic'), local(Raleway-BoldItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw9qR_DNCb_Vo.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 700;src: local('Raleway Bold Italic'), local(Raleway-BoldItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw9qR_AtCb.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 800;src: local('Raleway ExtraBold Italic'), local(Raleway-ExtraBoldItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw6qd_DNCb_Vo.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: italic;font-weight: 800;src: local('Raleway ExtraBold Italic'), local(Raleway-ExtraBoldItalic), url(<?php echo $font_url; ?>/raleway/1Ptpg8zYS_SKggPNyCgw6qd_AtCb.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 300;src: local('Raleway Light'), local(Raleway-Light), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwIYqWqhPAMif.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 300;src: local('Raleway Light'), local(Raleway-Light), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwIYqWqZPAA.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 400;src: local(Raleway), local(Raleway-Regular), url(<?php echo $font_url; ?>/raleway/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 400;src: local(Raleway), local(Raleway-Regular), url(<?php echo $font_url; ?>/raleway/1Ptug8zYS_SKggPNyC0ITw.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 500;src: local('Raleway Medium'), local(Raleway-Medium), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwN4rWqhPAMif.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 500;src: local('Raleway Medium'), local(Raleway-Medium), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwN4rWqZPAA.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 700;src: local('Raleway Bold'), local(Raleway-Bold), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwJYtWqhPAMif.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 700;src: local('Raleway Bold'), local(Raleway-Bold), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 800;src: local('Raleway ExtraBold'), local(Raleway-ExtraBold), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwIouWqhPAMif.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'Raleway';font-style: normal;font-weight: 800;src: local('Raleway ExtraBold'), local(Raleway-ExtraBold), url(<?php echo $font_url; ?>/raleway/1Ptrg8zYS_SKggPNwIouWqZPAA.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }
		<?php endif; ?>
		<?php if ( !empty($array_fonts) && in_array( '"PT Serif", "regular:italic:700:700italic", serif', $array_fonts ) ): ?>
            @font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 400;src: local('PT Serif Italic'), local(PTSerif-Italic), url(<?php echo $font_url; ?>/ptserif/EJRTQgYoZZY2vCFuvAFT_rC1chb-.woff2) format("woff2");unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 400;src: local('PT Serif Italic'), local(PTSerif-Italic), url(<?php echo $font_url; ?>/ptserif/EJRTQgYoZZY2vCFuvAFT_rm1chb-.woff2) format("woff2");unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116 }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 400;src: local('PT Serif Italic'), local(PTSerif-Italic), url(<?php echo $font_url; ?>/ptserif/EJRTQgYoZZY2vCFuvAFT_rO1chb-.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 400;src: local('PT Serif Italic'), local(PTSerif-Italic), url(<?php echo $font_url; ?>/ptserif/EJRTQgYoZZY2vCFuvAFT_r21cg.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 700;src: local('PT Serif Bold Italic'), local(PTSerif-BoldItalic), url(<?php echo $font_url; ?>/ptserif/EJRQQgYoZZY2vCFuvAFT9gaQZyTfoPNB.woff2) format("woff2");unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 700;src: local('PT Serif Bold Italic'), local(PTSerif-BoldItalic), url(<?php echo $font_url; ?>/ptserif/EJRQQgYoZZY2vCFuvAFT9gaQZy3foPNB.woff2) format("woff2");unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116 }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 700;src: local('PT Serif Bold Italic'), local(PTSerif-BoldItalic), url(<?php echo $font_url; ?>/ptserif/EJRQQgYoZZY2vCFuvAFT9gaQZyffoPNB.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'PT Serif';font-style: italic;font-weight: 700;src: local('PT Serif Bold Italic'), local(PTSerif-BoldItalic), url(<?php echo $font_url; ?>/ptserif/EJRQQgYoZZY2vCFuvAFT9gaQZynfoA.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 400;src: local('PT Serif'), local(PTSerif-Regular), url(<?php echo $font_url; ?>/ptserif/EJRVQgYoZZY2vCFuvAFbzr-tdg.woff2) format("woff2");unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 400;src: local('PT Serif'), local(PTSerif-Regular), url(<?php echo $font_url; ?>/ptserif/EJRVQgYoZZY2vCFuvAFSzr-tdg.woff2) format("woff2");unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116 }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 400;src: local('PT Serif'), local(PTSerif-Regular), url(<?php echo $font_url; ?>/ptserif/EJRVQgYoZZY2vCFuvAFYzr-tdg.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 400;src: local('PT Serif'), local(PTSerif-Regular), url(<?php echo $font_url; ?>/ptserif/EJRVQgYoZZY2vCFuvAFWzr8.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 700;src: local('PT Serif Bold'), local(PTSerif-Bold), url(<?php echo $font_url; ?>/ptserif/EJRSQgYoZZY2vCFuvAnt66qfVyvHpA.woff2) format("woff2");unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 700;src: local('PT Serif Bold'), local(PTSerif-Bold), url(<?php echo $font_url; ?>/ptserif/EJRSQgYoZZY2vCFuvAnt66qWVyvHpA.woff2) format("woff2");unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116 }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 700;src: local('PT Serif Bold'), local(PTSerif-Bold), url(<?php echo $font_url; ?>/ptserif/EJRSQgYoZZY2vCFuvAnt66qcVyvHpA.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF }@font-face {font-display: swap;font-family: 'PT Serif';font-style: normal;font-weight: 700;src: local('PT Serif Bold'), local(PTSerif-Bold), url(<?php echo $font_url; ?>/ptserif/EJRSQgYoZZY2vCFuvAnt66qSVys.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD }
		<?php endif; ?>
		<?php
		echo ob_get_clean();
	}
}
