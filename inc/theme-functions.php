<?php

/********************************************************
 * Header
 ********************************************************/
/**
 *  Header Social
 */
function header_social() {

    if(get_theme_mod('social_header_enable', '1')) :
        ?>
        <ul class="list-inline header-social">
            <?php
            if(get_theme_mod('header_fb', 'https://www.facebook.com/') ) {
                echo '<li><a href="'.get_theme_mod('header_fb').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw', '1')) {
                echo '<li><a href="'.get_theme_mod('header_tw', 'https://twitter.com ').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li', '1')) {
                echo '<li><a href="'.get_theme_mod('header_li', 'https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint', '1')) {
                echo '<li><a href="'.get_theme_mod('header_pint', 'https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins', '1')) {
                echo '<li><a href="'.get_theme_mod('header_ins', 'https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri', '1')) {
                echo '<li><a href="'.get_theme_mod('header_dri', 'https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus', '1')) {
                echo '<li><a href="'.get_theme_mod('header_plus', 'https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you', '1')) {
                echo '<li><a href="'.get_theme_mod('header_you', 'https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'themetim_header_social', 'header_social' );
/**
 * Header Info
 */
function header_account(){
    if(get_theme_mod('top_header_tel_enable', '1')):
        echo '<li><i class="fa fa-phone"></i> '.get_theme_mod('top_header_tel', '+88 987 4050').'</li>';
    endif;
    if(get_theme_mod('top_header_email_enable', '1')):
        echo '<li><i class="fa fa-envelope"></i> '.get_theme_mod('top_header_email', 'info@youremail.com').'</li>';
    endif;

}
add_action( 'themetim_header_account', 'header_account' );

/********************************************************
 * Footer
 ********************************************************/
/**
 * Footer Social
 */
function footer_social() {
    if(get_theme_mod('social_footer_enable','1')) :
        ?>
        <ul class="list-inline footer-social">
            <?php
            if(get_theme_mod('footer_fb','1')) {
                echo '<li><a href="'.get_theme_mod('footer_fb','https://www.facebook.com/ ').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('footer_tw','1')) {
                echo '<li><a href="'.get_theme_mod('footer_tw','https://twitter.com').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('footer_li','1')) {
                echo '<li><a href="'.get_theme_mod('footer_li','https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_pint','1')) {
                echo '<li><a href="'.get_theme_mod('footer_pint','https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('footer_ins','1')) {
                echo '<li><a href="'.get_theme_mod('footer_ins','https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('footer_dri')) {
                echo '<li><a href="'.get_theme_mod('footer_dri').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('footer_plus')) {
                echo '<li><a href="'.get_theme_mod('footer_plus').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('footer_you')) {
                echo '<li><a href="'.get_theme_mod('footer_you').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
        </ul>
        <?php
    endif;
}
add_action( 'themetim_footer_social', 'footer_social' );
/**
 * Footer Newsletter
 */
function footer_newsletter(){
    if(get_theme_mod('newsletter_footer_enable','1')){
        ?>
        <h4><?php echo get_theme_mod('top_footer_newsletter_title','Newsletter'); ?></h4>
        <form class="form-inline newsletter" action="<?php echo get_theme_mod('top_footer_newsletter_url','1'); ?>" method="post" target="_blank">
            <div class="input-group">
                <input type="email" class="form-control" name="newsletter-email" id="newsletter-email" placeholder="info@yoursite.com" required="">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="fa fa-envelope"></i></button>
                </span>
            </div>
        </form>
    <?php }
}
add_action( 'themetim_footer_newsletter', 'footer_newsletter' );

/**
 * Middle Footer Description
 */
function middle_footer_description(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 padding-top-50">
        <h4><?php echo get_theme_mod('middle_footer_text_heading','Loan'); ?></h4>
        <p><?php echo get_theme_mod('middle_footer_text','Our agency was founded with a focus on straight-forward, effective, high-quality websites, with fast delivery; you can get online quickly and easily.'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_description', 'middle_footer_description' );

/**
 * Middle Footer Nav 1
 */
function middle_footer_nav_1(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 padding-top-50 footer-nav-1">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_1','The Service'); ?></h4>
        <?php
        if ( has_nav_menu( 'footer-1' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_class' => 'list-unstyled text-capitalize', 'menu_id' => 'footer-1','container' => '' ) );
        else: echo '<p class="text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 1</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_1', 'middle_footer_nav_1' );

/**
 * Middle Footer Nav 2
 */
function middle_footer_nav_2(){
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12 padding-top-50">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_2','OPEN HOURS'); ?></h4>
        <p><?php echo get_theme_mod('open_hour','Monday 11am-7pm<br/>Tuesday-Friday 10am-5pm<br/>Saturday 11am-7pm<br/>Sunday 10am-6pm'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_2', 'middle_footer_nav_2' );

/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){
    ?>
    <div class="col-md-6 col-sm-6 col-xs-12 site-info">
        <p><?php echo get_theme_mod('bottom_footer_copyright','&copy; ThemeTim. All Rights Reserved.'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_copyright', 'bottom_footer_copyright' );

/**
 * Bottom Footer Nav
 */
function bottom_footer_nav(){
    ?>
    <div class="col-md-6 col-sm-6 col-xs-12 footer-nav-3">
        <?php
        if ( has_nav_menu( 'footer-3' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-3', 'menu_class' => 'list-inline text-right text-capitalize margin-null', 'menu_id' => 'footer-3','container' => '' ) );
        else: echo '<p class="pull-right text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 3</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_nav', 'bottom_footer_nav' );


/**
 * Social Sharing
 */
function themetim_social_sharing(){
    ?>
    <ul class="list-inline">
        <li class="margin-top-10"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="margin-top-10"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="margin-top-10"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li class="margin-top-10"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="margin-top-10"><a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <?php
}