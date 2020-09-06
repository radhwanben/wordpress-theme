<?php

function ajieledition_theme_support(){
    //add dynamic title tag , logo support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}



/**
 * this function is used to register styles (bootstrap css fontawesome and more )
 */

 function ajieledition_register_styles(){
    wp_enqueue_style('ajieledition-main' , get_template_directory_uri(). "/style.css" );
     wp_enqueue_style('ajieledition-bootstrap' , "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
     wp_enqueue_style('ajieledition-font' , "https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&family=Raleway:wght@300;400;500;600;700&display=swap" );

 }

/**
 * this function is used to register scripts (bootstrap js jquery and more )
 */

function ajieledition_register_scripts(){
  
    wp_enqueue_script('ajieledition-jquery' ,'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('ajieledition-popper' ,'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js');
    wp_enqueue_script('ajieledition-bootstrap' ,'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('ajieledition-js' , get_template_directory_uri(). "/assets/js/main.js",array(),true);
}


/**
 * this function is responsable to add menu to wordpress themes
 */

function ajieledition_menus(){
    $locations=array(
        'primary' => "primary navbar ",
        'social media' => "social media navbar ",
        'footer' => "footer navbar"
    );

    register_nav_menus($locations);
}


/**
 * this function is for costum menu otpion like style ....
 */

function ajieledition_menus_options(){
    wp_nav_menu(
		array(
			'menu' => 'primary',
			'container' => false,
			'theme_location' =>'primary',
            'menu_class' => 'navbar-nav w-10',
            'menu_id' =>' ',
            'depth' => 2
		)
		);
}

/**
 *this function change <a> class 
 */
function ajieledition_anchor_attr($attr){
    $attr['class'] ="Xmmenu-navlink";
    return $attr;
}

function ajieledition_li_attr($classes, $item, $args, $depth){
    $classes[] ='nav-item Xmmenu-navitem col-3';
    return $classes;
}

add_filter("nav_menu_link_attributes" ,"ajieledition_anchor_attr");
add_filter("nav_menu_css_class" ,"ajieledition_li_attr", 10, 4);

/**
 * this function is for pagination between posts 
 */

function ajieledition_pagination(){
    global $wp_query; 
    $all_pages=$wp_query->max_num_pages; //get all posts 
    $current_page =max(1,get_query_var('paged')); //get current page
    if ($all_pages > 1 ){
        return paginate_links(array(
            'base'  => get_pagenum_link() . '%#%',
            'format'  => '/page/%#%',
            'current'  => $current_page
        ));
    }
}

/**
 * this function is for widgets
 */

function ajieledition_widgets_areas(){
    register_sidebar(
        array(
        'name' =>'Top sidbar',
        'id' => 'topsidbar',
        'class'         => '',
        'before_widget' => '',
        'after_widget'  => "",
        'before_title'  => '',
        'after_title'   => "",

    ));

    register_sidebar(
        array(
        'name' =>'Footer sidbar',
        'id' => 'footersidbar',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",

    ));
}

/**
 * add_action is to add the functions to wordpress system 
 */

 add_action('wp_enqueue_scripts','ajieledition_register_styles');
 add_action('wp_enqueue_scripts','ajieledition_register_scripts');
 add_action('after_setup_theme','ajieledition_theme_support');
 add_action('init','ajieledition_menus');
 add_action('widgets_init','ajieledition_widgets_areas');


?>