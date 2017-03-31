<?php

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

if (!function_exists(custom_pagination)) {
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
}


?>