<?php 

function Resources() {

    $labels = array(
    'name'               => __( 'Resources', 'post type general name' ),
    'singular_name'      => __( 'Resource', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Resource'),
    'add_new_item'       => __( 'Add New News', 'Resource'),
    'edit_item'          => __( 'Edit Resource', 'theme' ),
    'new_item'           => __( 'New Resource', 'theme' ),
    'all_items'          => __( 'All Resources', 'theme' ),
    'view_item'          => __( 'View Resource', 'theme' ),
    'search_items'       => __( 'Search Resources', 'theme' ),
    'not_found'          => __( 'No Resources found', 'theme' ),
    'not_found_in_trash' => __( 'No Resources found in the Trash', 'theme' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Resources'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'List of Resources custom post type',
    'public'        => true,
    'menu_position' => '',
    'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'name_admin_bar', 'exclude_from_search', 'post-formats', 'custom-fields', 'revisions'),
    'has_archive'   => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-megaphone',
    'publicly_queryable'    => true,
    'taxonomies' => array('category', 'post_tag')
  );

    register_post_type( 'Resources', $args);
}

add_action( 'init', 'Resources' );

?>
