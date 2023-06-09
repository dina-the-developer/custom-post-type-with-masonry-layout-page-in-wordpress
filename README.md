# Custom Post Type with masonry layout page in WordPress

Create a visually appealing page in WordPress that showcases your "Custom Post Type" posts in an engaging masonry layout, offering an attractive and dynamic presentation of your content in WordPress websites.

First, you register the <b>"Resources"</b> post type using below code in your theme's <b>functions.php</b> file. This allows you to define the labels, settings, and support for various features such as title, content, and featured image.

<pre><code>
function Resources() { //name of your choice

  $labels = array(
    'name'               => __( 'Resources', 'post type general name' ),
    'singular_name'      => __( 'Resource', 'post type singular name' ),
    'add_new'            => __( 'Add New', 'Resource' ),
    'add_new_item'       => __( 'Add New Resource', 'avx' ),
    'edit_item'          => __( 'Edit Resource', 'avx' ),
    'new_item'           => __( 'New Resource', 'avx' ),
    'all_items'          => __( 'All Resources', 'avx' ),
    'view_item'          => __( 'View Resource', 'avx' ),
    'search_items'       => __( 'Search Resources', 'avx' ),
    'not_found'          => __( 'No Resources found', 'avx' ),
    'not_found_in_trash' => __( 'No Resources found in the Trash', 'avx' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Resources'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'List of resources under this Custom Post Type.',
    'public'        => true,
    'menu_position' => '',
    'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'name_admin_bar', 'exclude_from_search', 'post-formats', 'custom-fields', 'revisions'),
    'has_archive'   => true,
    'show_in_menu' => true,
    'menu_icon' => 'dashicons-buddicons-groups',
    'taxonomies' => array('category', 'post_tag')
  );
  
  register_post_type( 'Events', $args);

}
  
add_action( 'init', 'Events' );

</code></pre>

Next, you create a custom page template called "Masonry Resources" that utilizes a masonry layout to showcase the "Resources" posts in an organized grid-like structure. This template queries the "Resources" posts and dynamically generates the HTML markup for each post, including the featured image, title, and content.

<pre><code>
<?php 
	$args = array(
		"post_type" => "Blogs",
		"posts_per_page"   => "-1",
		"order"            => "DESC",
	); 
?>
<?php query_posts( $args ); ?>
<div class="row" data-masonry="{'percentPosition': true }">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $featured_img_url = get_the_post_thumbnail_url(); ?>
			<div class="col-sm-3">
				<div class="card shadow">
					<img src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="">
					<div class="card-body">
						<p class="card-title"><?php the_title(); ?></p>
						<p class="card-category"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> | <?php echo $minutes; ?> Min Read</p>
						<a href="<?php the_permalink(); ?>" class="stretched-link"></a>
					</div>
				</div>
			</div>
	<?php endwhile; // end of the loop. ?>
</div>
<?php wp_reset_query(); ?>
</code></pre>


To style the masonry layout, you can apply CSS rules that define the grid structure, item appearance, and spacing. This allows you to customize the visual presentation of the masonry layout to match your desired design.

By using this approach, you can create a visually appealing page in WordPress that showcases your "Resources" posts in an engaging masonry layout, offering an attractive and dynamic presentation of your content.
