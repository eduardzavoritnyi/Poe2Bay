<?php 

add_action('customize_register', function ( WP_Customize_Manager $wp_customize){

    $wp_customize -> add_section('poe2bay_theme_options', array(
        'title' => __('Theme options', 'poe2bay'),
        'priority' => 10,
    ));

    //phone

    $wp_customize -> add_setting('poe2bay_phone');
    $wp_customize -> add_control('poe2bay_phone', array(
     
    'label'=> __('Phone in header', 'poe2bay'),
    'section' => 'poe2bay_theme_options'

    ));

        //youtube

    $wp_customize -> add_setting('poe2bay_youtube');
    $wp_customize -> add_control('poe2bay_youtube', array(
     
    'label'=> __('Youtube Link', 'poe2bay'),
    'section' => 'poe2bay_theme_options'

    ));

          //facebook

    $wp_customize -> add_setting('poe2bay_facebook');
    $wp_customize -> add_control('poe2bay_facebook', array(
     
    'label'=> __('Facebook Link', 'poe2bay'),
    'section' => 'poe2bay_theme_options'

    ));

              //instagram

    $wp_customize -> add_setting('poe2bay_instagram');
    $wp_customize -> add_control('poe2bay_instagram', array(
     
    'label'=> __('Instagram Link', 'poe2bay'),
    'section' => 'poe2bay_theme_options'

    ));
});

function poe2bay_theme_options(){
    return array(
        'phone' => get_theme_mod('poe2bay_phone'),
        'youtube' => get_theme_mod('poe2bay_youtube'),
        'facebook' => get_theme_mod('poe2bay_facebook'),
        'instagram' => get_theme_mod('poe2bay_instagram'),
    );
}