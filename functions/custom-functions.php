<?php
// Creating my portfolio custom post type function
// reference material: https://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/

function portfolio_post_type() {

    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolios' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'portfolio_post_type' );

/*
* Register CPT options for Portfolio
*/

function custom_post_porfolio() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Portfolio', 'Post Type General Name', 'marko-portfolio' ),
        'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'marko-portfolio' ),
        'menu_name'           => __( 'Portfolios', 'marko-portfolio' ),
        'parent_item_colon'   => __( 'Parent Portfolio', 'marko-portfolio' ),
        'all_items'           => __( 'All Portfolios', 'marko-portfolio' ),
        'view_item'           => __( 'View Portfolio', 'marko-portfolio' ),
        'add_new_item'        => __( 'Add New Portfolio', 'marko-portfolio' ),
        'add_new'             => __( 'Add New', 'marko-portfolio' ),
        'edit_item'           => __( 'Edit Portfolio', 'marko-portfolio' ),
        'update_item'         => __( 'Update Portfolio', 'marko-portfolio' ),
        'search_items'        => __( 'Search Portfolio', 'marko-portfolio' ),
        'not_found'           => __( 'Not Found', 'marko-portfolio' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'marko-portfolio' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'portfolios', 'marko-portfolio' ),
        'description'         => __( 'Portfolio entries', 'marko-portfolio' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // shows the gutenberg editor
        'show_in_rest' => true,
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'portfolios', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_porfolio', 0 );


/*
 * CPT for Skills
 */
 // Creating my portfolio custom post type function
 function skill_post_type() {

     register_post_type( 'skill',
     // CPT Options
         array(
             'labels' => array(
                 'name' => __( 'Skills' ),
                 'singular_name' => __( 'Skill' )
             ),
             'public' => true,
             'has_archive' => true,
             'rewrite' => array('slug' => 'skill'),
         )
     );
 }
 // Hooking up our function to theme setup
 add_action( 'init', 'skill_post_type' );


 /*
 * Register CPT options for Skills
 */

 function custom_post_skill() {

 // Set UI labels for Custom Post Type
     $labels = array(
         'name'                => _x( 'Skill', 'Post Type General Name', 'marko-portfolio' ),
         'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'marko-portfolio' ),
         'menu_name'           => __( 'Skills', 'marko-portfolio' ),
         'parent_item_colon'   => __( 'Parent Skill', 'marko-portfolio' ),
         'all_items'           => __( 'All Skills', 'marko-portfolio' ),
         'view_item'           => __( 'View Skill', 'marko-portfolio' ),
         'add_new_item'        => __( 'Add New Skill', 'marko-portfolio' ),
         'add_new'             => __( 'Add New', 'marko-portfolio' ),
         'edit_item'           => __( 'Edit Skill', 'marko-portfolio' ),
         'update_item'         => __( 'Update Skill', 'marko-portfolio' ),
         'search_items'        => __( 'Search Skill', 'marko-portfolio' ),
         'not_found'           => __( 'Not Found', 'marko-portfolio' ),
         'not_found_in_trash'  => __( 'Not found in Trash', 'marko-portfolio' ),
     );

 // Set other options for Custom Post Type

     $args = array(
         'label'               => __( 'skills', 'marko-portfolio' ),
         'description'         => __( 'Skill entries', 'marko-portfolio' ),
         'labels'              => $labels,
         // Features this CPT supports in Post Editor
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // shows the gutenberg editor
         'show_in_rest' => true,
         // You can associate this CPT with a taxonomy or custom taxonomy.
         'taxonomies'          => array( 'genres' ),
         /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
     );

     // Registering your Custom Post Type
     register_post_type( 'skills', $args );

 }

 /* Hook into the 'init' action so that the function
 * Containing our post type registration is not
 * unnecessarily executed.
 */

 add_action( 'init', 'custom_post_skill', 0 );
