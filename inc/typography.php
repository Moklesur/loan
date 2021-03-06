<?php

/**
 * ThemeTim Typography & Color Settings
 *
 */

function themetim_typography_color($color) {

    wp_enqueue_style(
        'themetim',
        get_template_directory_uri() . '/assets/css/themetim.css'
    );

    $color = '';

    /*
     * General Section
     */
    $body_text_color = get_theme_mod( 'bg_text_color', '#373c5f' );
    $body_font_size = get_theme_mod( 'body_font_size', '14' );
    $body_font_family = get_theme_mod( 'body_font_family', 'Poppins' );

    $color .= "body { color:" . esc_attr($body_text_color) . "; font-size: " . esc_attr($body_font_size) . "px; font-family: ". esc_attr(str_replace('+', ' ', $body_font_family)) ."} ";

    $heading_color = get_theme_mod( 'heading_color', '#373c5f' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Poppins' );
    $color .= "h1, h2, h3, h4, h5, h6 { color:" . esc_attr($heading_color) . ";font-family: ". esc_attr(str_replace('+', ' ', $heading_font_family)) ."} ";

    $link_color = get_theme_mod( 'link_color', '#373c5f' );
    $color .= ".woocommerce ul.products li.product .price,.header-social a:hover,.footer-main .footer-nav-3 a:hover,a,.header-bottom .navbar-default .active a:hover,.header-bottom .navbar-default li> a,.woocommerce div.product .product_title,.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce div.product form.cart .variations td.label { color:" . esc_attr($link_color) . "} ";

    $link_hover_color = get_theme_mod( 'link_hover_color', '#b49132' );
    $color .= ".footer-main a:hover,.search-fix .btn:hover,a:hover,.header-bottom .navbar-default .active a,.header-bottom .navbar-default .active a:hover,.header-bottom .navbar-default li> a:hover { color:" . esc_attr($link_hover_color) . "} ";

    /*
     * Header Section
     */
    $header_bg_color = get_theme_mod( 'header_bg_color', '#fff' );
    $header_text_color = get_theme_mod( 'header_text_color', '#000' );
    $color .= ".header { background:" . esc_attr($header_bg_color) . "; color: ". esc_attr($header_text_color) .";} ";

    /*
     * Footer Section
     */
    $footer_bg_color = get_theme_mod( 'footer_bg_color', '#373c5f' );
    $footer_text_color = get_theme_mod( 'footer_text_color', '#fff' );
    $color .= ".footer-main { background:" . esc_attr($footer_bg_color) . ";} ";
    $color .= ".footer-main ,.footer-main h4,.footer-main h2,.footer-main h1,.footer-main h3,.footer-main a{ color: ". esc_attr($footer_text_color) .";} ";

    /*
     * Default Button
     */
    $btn_default_bg = get_theme_mod( 'btn_default_bg', '#b49132' );
    $btn_default_text = get_theme_mod( 'btn_default_text', '#fff' );
    $btn_default_border = get_theme_mod( 'btn_default_border', '#b49132' );

    $color .= ".woocommerce-product-search input[type=submit],.camera_wrap .slider-button .btn-default,.btn-default,.camera_wrap.main-slider .btn, .btn-default.disabled,.widget-area .search-form .search-submit,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce div.product form.cart .button,.woocommerce #review_form #respond .form-submit input,.woocommerce input.button , .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,.woocommerce #payment #place_order { background-color:" . esc_attr($btn_default_bg) . "; color: " . esc_attr($btn_default_text) . ";border-color: " . esc_attr($btn_default_border) . "; } ";

    $btn_default_bg_hover = get_theme_mod( 'btn_default_bg_hover', '#373c5f' );
    $btn_default_text_hover = get_theme_mod( 'btn_default_text_hover', '#fff' );
    $btn_default_border_hover = get_theme_mod( 'btn_default_border_hover', '#373c5f' );

    $color .= ".woocommerce-product-search input[type=submit]:hover,.camera_wrap .slider-button .btn-default:hover,.btn-default.active, .btn-default.focus, .btn-default:active, .btn-default:focus, .btn-default:hover, .open>.dropdown-toggle.btn-default,.widget-area .search-form .search-submit:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce div.product form.cart .button:hover ,.woocommerce #review_form #respond .form-submit input:hover,.woocommerce input.button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #payment #place_order:hover,.camera_wrap.main-slider .btn:hover{ background-color:" . esc_attr($btn_default_bg_hover) . "; color: " . esc_attr($btn_default_text_hover) . ";border-color: " . esc_attr($btn_default_border_hover) . "; } ";

    /*
     * Primary Button
     */
    $btn_primary_bg = get_theme_mod( 'btn_primary_bg', '#373c5f' );
    $btn_primary_text = get_theme_mod( 'btn_primary_text', '#fff' );
    $btn_primary_border = get_theme_mod( 'btn_primary_border', '#373c5f' );

    $color .= ".camera_wrap .slider-button .btn-primary,.btn-primary, .btn-primary.disabled,.wpcf7-submit,.woocommerce ul.products li.product .button{ background-color:" . esc_attr($btn_primary_bg) . "; color: " . esc_attr($btn_primary_text) . ";border-color: " . esc_attr($btn_primary_border) . "; } ";

    $btn_primary_bg_hover = get_theme_mod( 'btn_primary_bg_hover', '#b49132' );
    $btn_primary_text_hover = get_theme_mod( 'btn_primary_text_hover', '#fff' );
    $btn_primary_border_hover = get_theme_mod( 'btn_primary_border_hover', '#b49132' );

    $color .= ".woocommerce ul.products li.product .button:hover,.camera_wrap .slider-button .btn-primary:hover,.btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open>.dropdown-toggle.btn-primary,.wpcf7-submit:hover{ background-color:" . esc_attr($btn_primary_bg_hover) . "; color: " . esc_attr($btn_primary_text_hover) . ";border-color: " . esc_attr($btn_primary_border_hover) . "; } ";

    /*
     * Success Button
     */
    $btn_success_bg = get_theme_mod( 'btn_success_bg', '#fff' );
    $btn_success_text = get_theme_mod( 'btn_success_text', '#000' );
    $btn_success_border = get_theme_mod( 'btn_success_border', '#fff' );

    $color .= ".camera_wrap .slider-button .btn-success,.btn-success,.btn-success.disabled{ background-color:" . esc_attr($btn_success_bg) . "; color: " . esc_attr($btn_success_text) . ";border-color: " . esc_attr($btn_success_border) . "; } ";

    $btn_success_bg_hover = get_theme_mod( 'btn_success_bg_hover', '#000' );
    $btn_success_text_hover = get_theme_mod( 'btn_success_text_hover', '#fff' );
    $btn_success_border_hover = get_theme_mod( 'btn_success_border_hover', '#000' );

    $color .= ".camera_wrap .slider-button .btn-success:hover,.btn-success.active, .btn-success.focus, .btn-success:active, .btn-success:focus, .btn-success:hover, .open>.dropdown-toggle.btn-success{ background-color:" . esc_attr($btn_success_bg_hover) . "; color: " . esc_attr($btn_success_text_hover) . ";border-color: " . esc_attr($btn_success_border_hover) . "; } ";

    /*
     * Extra Text Color
     */
    $text_color_1 = get_theme_mod( 'text_color_1', '#000' );
    $text_color_2 = get_theme_mod( 'text_color_2', '#ccc' );

    $color .= ".text-color-1{ color: " . esc_attr($text_color_1) . "; } ";
    $color .= ".text-color-2{ color: " . esc_attr($text_color_2) . "; } ";

    /*
     * Extra Background Color
     */
    $bg_color_1 = get_theme_mod( 'bg_color_1', '#000' );
    $bg_color_2 = get_theme_mod( 'bg_color_2', '#ccc' );

    $color .= ".background-1{ background-color: " . esc_attr($bg_color_1) . "; } ";
    $color .= ".background-1{ background-color: " . esc_attr($bg_color_2) . "; } ";

    /*
     * Section Gap
     */
/*    $section_gap_1 = get_theme_mod( 'section_gap_1', '80' );
    $section_gap_2 = get_theme_mod( 'section_gap_2', '80' );
    $section_gap_3 = get_theme_mod( 'section_gap_3', '50' );
    $section_gap_4 = get_theme_mod( 'section_gap_4', '50' );

    $color .= ".section-gap-1{ padding-top: " . esc_attr($section_gap_1) . "; } ";
    $color .= ".section-gap-2{ padding-bottom: " . esc_attr($section_gap_2) . "; } ";
    $color .= ".section-gap-3{ padding-top: " . esc_attr($section_gap_3) . "; } ";
    $color .= ".section-gap-4{ padding-bottom: " . esc_attr($section_gap_4) . "; } ";*/


    /*
     * ThemeTim Typography & Color Inline
     */

    wp_add_inline_style( 'themetim', $color );
}
add_action( 'wp_enqueue_scripts', 'themetim_typography_color' );