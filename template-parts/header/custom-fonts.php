<?php
    // Set our glob path.
    $glob_path = get_stylesheet_directory() . '/fonts/*';

    // Get all the possible CPT classes
    $fonts = glob( $glob_path );
?>

<?php if ( $fonts ) : ?>
    <?php foreach ( $fonts as $font ) : ?>
        <?php $pieces = explode( '/', $font ); ?>
        <?php $length = count( $pieces ); ?>
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/<?php echo esc_html( $pieces[$length - 1] ); ?>" as="font">
    <?php endforeach; ?>
<?php endif; ?>