<?php
/**
 * CodeCacao
 
 **/

function codecacao_setup() {
	register_nav_menus( array(
		'primary' => __( 'Main Menu',      'codecacao' ),
		'social'  => __( 'Social Links Menu', 'codecacao' ),
	) );
	
	/* Enable Featured image for posts */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 18,
		'width'       => 207,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'codecacao_setup' );


/**
 * Enqueue scripts and styles.
 *
 */
function codecacao_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css',false,'1.1','all');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');
	wp_enqueue_style( 'codecacao-style', get_stylesheet_uri() );

	wp_enqueue_script( 'codecacao-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20170605', true );
	wp_enqueue_script( 'codecacao-script', get_template_directory_uri() . '/js/matchHeight.js', array( 'jquery' ), '20170605', true );
	wp_enqueue_script( 'codecacao-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20170605', true );
}
add_action( 'wp_enqueue_scripts', 'codecacao_scripts' );



add_action( 'init', 'create_posttypes' );
function create_posttypes() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name'               => _x( 'Projects', 'post type general name', 'codecacao' ),
				'singular_name'      => _x( 'Project', 'post type singular name', 'codecacao' ),
				'menu_name'          => _x( 'Projects', 'admin menu', 'codecacao' ),
				'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'codecacao' ),
				'add_new'            => _x( 'Add project', 'book', 'codecacao' ),
				'add_new_item'       => __( 'Add new project', 'codecacao' ),
				'new_item'           => __( 'New project', 'codecacao' ),
				'edit_item'          => __( 'Edit project', 'codecacao' ),
				'view_item'          => __( 'View project', 'codecacao' ),
				'all_items'          => __( 'All projects', 'codecacao' ),
				'search_items'       => __( 'Search projects', 'codecacao' ),
				'parent_item_colon'  => __( 'Parent projects:', 'codecacao' ),
				'not_found'          => __( 'No projects found.', 'codecacao' ),
				'not_found_in_trash' => __( 'No projects found in Trash.', 'codecacao' )
      ),
      'public' => true,
      'has_archive' => true,
			'publicly_queryable' => true,
			'capability_type'    => 'post',
      'rewrite' => array('slug' => 'projects'),
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' )
    )
  );
}