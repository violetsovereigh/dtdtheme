<?php
function web_files(){
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'custom-google-fonts', 'http://fonts.googleapis.com/earlyaccess/notosanskannada.css' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/dist/js/bootstrap.js', array( 'jquery' ) );
    wp_enqueue_style('mystyle',get_stylesheet_uri(),Null,microtime());
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_uri('/bootstrap/dist/css/bootstrap.css') );
}
add_action( 'wp_enqueue_scripts', 'web_files' );
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    $args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
    $args['class'] = array('type' => 'text', 'label' => 'Custom Classess', 'name' => 'class', 'value' => get_field($field . '_class', $attachment_id) ); // Creates Custom Classess field
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );
function university_features(){
            add_theme_support('title-tag');
            add_theme_support( 'post-thumbnails' );
            add_image_size('professorLandscape',400,260,true);
            add_image_size('professorPortrait',480,650,true);
        }
function custom_rest(){
    register_rest_field('post','schoolName',array(
        'get_callback' => function(){return 'National Taipei';}
    ));
}
function university_files(){
    
}
add_action('wp_enqueue_script','university_files');
        add_action('after_setup_theme','university_features');
        add_action('rest_api_init','custom_rest');
//Create extra fields called Altnative Text and Custom Classess


    
?>