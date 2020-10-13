<?php

/**
* select sanitization function
* @see https://divpusher.com/blog/wordpress-customizer-sanitization-examples/#select
*/
function wyvern_child_sanitize_select( $input, $setting ){
          
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                      
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
* Sanitize prepoulated page select dropdowns
* @see https://forums.envato.com/t/select-sanitize-callback-in-wp-customizer/51740
*/
function wyvern_child_sanitize_page_dropdown( $page_id, $setting ) {
    // Ensure $input is an absolute integer.
    $page_id = absint( $page_id );
  
    // If $page_id is an ID of a published page, return it; otherwise, return the default.
    return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/** 
* file input sanitization function
* @see https://divpusher.com/blog/wordpress-customizer-sanitization-examples/#file
*/
function wyvern_child_sanitize_file( $file, $setting ) {
          
    //allowed file types
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png'
    );
      
    //check file type from file name
    $file_ext = wp_check_filetype( $file, $mimes );
      
    //if file has a valid mime type return it, otherwise return default
    return ( $file_ext['ext'] ? $file : $setting->default );
}