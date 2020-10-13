<?php

// Get style controls from the customizer
$typography_font_primary        = str_replace( '+', ' ', get_theme_mod( 'typography_font_primary' ) );
$typography_font_secondary      = str_replace( '+', ' ', get_theme_mod( 'typography_font_secondary' ) );

$colors_header_background       = get_theme_mod( 'colors_header_background' );

$colors_nav_item                = get_theme_mod( 'colors_nav_item' );
$colors_nav_item_hover          = get_theme_mod( 'colors_nav_item_hover' );

$colors_footer_background       = get_theme_mod( 'colors_footer_background' );

$colors_footer_nav_item         = get_theme_mod( 'colors_footer_nav_item' );
$colors_footer_nav_item_hover   = get_theme_mod( 'colors_footer_nav_item_hover' );

$colors_copyright_background    = get_theme_mod( 'colors_copyright_background' );
$colors_copyright_text          = get_theme_mod( 'colors_copyright_text' );

?>

<style type="text/css">
    :root {
        /* Fonts */
        <?php if ( $typography_font_primary && ( $typography_font_primary !== 'Default' ) && ( $typography_font_primary !== 'Custom' ) ) : ?>
            --font-plain: <?php echo esc_html( $typography_font_primary ); ?>, sans-serif;
        <?php endif; ?>

        <?php if ( $typography_font_secondary && ( $typography_font_secondary !== 'Default' ) && ( $typography_font_secondary !== 'Custom' ) ) : ?>
            --font-special: <?php echo esc_html( $typography_font_secondary ); ?>, serif;
        <?php endif; ?>

        /* Header */
        <?php if ( $colors_header_background ) : ?>
            --site-header-background-color: <?php echo esc_html( $colors_header_background ); ?>;
        <?php endif; ?>

        /* Navigation */
        <?php if ( $colors_nav_item ) : ?>
            --nav-item-color: <?php echo esc_html( $colors_nav_item ); ?>;
        <?php endif; ?>

        <?php if ( $colors_nav_item_hover ) : ?>
            --nav-item-color-hover: <?php echo esc_html( $colors_nav_item_hover ); ?>;
        <?php endif; ?>
        
        /* Footer */
        <?php if ( $colors_footer_background ) : ?>
            --site-footer-background-color: <?php echo esc_html( $colors_footer_background ); ?>;
        <?php endif; ?>

        <?php if ( $colors_footer_nav_item ) : ?>
            --footer-nav-item-color: <?php echo esc_html( $colors_footer_nav_item ); ?>;
        <?php endif; ?>

        <?php if ( $colors_footer_nav_item_hover ) : ?>
            --footer-nav-item-color-hover: <?php echo esc_html( $colors_footer_nav_item_hover ); ?>;
        <?php endif; ?>
        
        /* Copyright Area */
        <?php if ( $colors_copyright_background ) : ?>
            --copyright-color: <?php echo esc_html( $colors_copyright_background ); ?>;
        <?php endif; ?>

        <?php if ( $colors_copyright_text ) : ?>
            --copyright-text-color: <?php echo esc_html( $colors_copyright_text ); ?>;
        <?php endif; ?>
    }
</style>