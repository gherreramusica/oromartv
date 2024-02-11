<?php

function mortal_theme() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' );
    }
     add_action( 'wp_enqueue_scripts', 'mortal_theme' );

     add_theme_support( 'post-thumbnails' );
     add_image_size( 'custom-size', 200, 132 , true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
     add_image_size('single-size', 1200, 600, true);
     add_image_size( 'mini-size', 150, 100 , true );
     add_image_size('main-post', 600, 400, true);
     add_image_size('page-banner', 1000, 600, true);

     // Función para contar visualizaciones de un post.
function set_post_views() {
    if ( is_single() ) {
        $post_ID = get_the_ID();
        $count = get_post_meta( $post_ID, 'post_views', true );

        if ( $count == '' ) {
            delete_post_meta( $post_ID, 'post_views' );
            add_post_meta( $post_ID, 'post_views', 1 );
        } else {
            update_post_meta( $post_ID, 'post_views', ++$count );
        }
    }
}
add_action( 'wp', 'set_post_views' );

// Función para obtener el número de visualizaciones de un post
function get_post_views( $post_ID ){
    $count = get_post_meta($post_ID, 'post_views', true);

    if ( $count == '' ){
        delete_post_meta($post_ID, 'post_views');
        add_post_meta($post_ID, 'post_views', 0);
        return 0;
    }

    return $count;
}
  


     ?>