<?php

function local_script(){
    wp_enqueue_script( 'localdata', get_stylesheet_directory_uri().'/js/localdata.js', null, 1.0, true);
    wp_localize_script('localdata', 'localData', array(
        'siteUrl' => site_url()
    ));
}

add_action('wp_enqueue_scripts', 'local_script');

/**
 custom menu
*/
function custom_menu( $menu_name ) 
{    
    $menu_items = wp_get_nav_menu_items($menu_name);
    
    if(isset($menu_items))
    {
        $menu_list = '<div class="menu-wrap">';
        $menu_list .= '<nav class="menu">';
        $menu_list .= '<div class="icon-list">';

        foreach ( $menu_items as $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= '<a href="' . $url . '"><i class="fa fa-fw fa-circle-thin"></i><span>' . $title . '</span></a>';
        }

        $menu_list .= '</div>';
        $menu_list .= '</nav>';
        $menu_list .= '<button class="close-button" id="close-button">Close Menu</button>';
        $menu_list .= '</div>';
        $menu_list .= '<a class="menu-button" id="open-button"></a>';

        echo $menu_list;
    }
}


function custom_pagination_hook(){
    do_action('custom_pagination_hook');
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

    if (empty($pagerange)) {
        $pagerange = 2;
    }

    /**
    * This first part of our function is a fallback
    * for custom pagination inside a regular loop that
    * uses the global $paged and global $wp_query variables.
    * 
    * It's good because we can now override default pagination
    * in our theme, and use this function in default quries
    * and custom queries.
    */
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if(!$numpages) {
            $numpages = 1;
        }
    }

    /** 
    * We construct the pagination arguments to enter into our paginate_links
    * function. 
    */
    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => false,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => false,
        'prev_text'       => __('Prev'),
        'next_text'       => __('Next'),
        'type'            => 'plain',
        'add_args'        => false,
        'add_fragment'    => ''
    );

    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
          echo $paginate_links;
        echo "</nav>";
    }

}

add_action('custom_pagination_hook', 'custom_pagination');

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function custom_logo_uri(){
    do_action('custom_logo_uri');
}

function get_custom_logo_uri(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    echo $image[0];
}  

add_action('custom_logo_uri', 'get_custom_logo_uri');

function custom_json_api_prepare_post( $post_response, $post, $context ) {
 
    $meta = get_post_meta( $post['ID'] );
    $post_response[‘meta_field_name’] = $meta;
 
    return $post_response;
}
add_filter( 'rest_prepare_post', 'custom_json_api_prepare_post', 10, 3 );

function prepare_rest($data, $post, $request){
    $data = $data->data;
    $postID = $post->ID;
    
    $thumbnail_id = get_post_thumbnail_id($postID);
    $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full');
    
    $_data['featured_image_src'] = $thumbnail[0];
    $data->data = $_data;
    
    return $data;
}

add_filter('rest_prepare_post', 'prepare_rest', 10, 3);

?>