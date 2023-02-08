<?php
function p4c_register_scripts_styles()
{
    /* link style css */
    $version = wp_get_theme()->get('Version');
    $version = time();
    // ---
    wp_enqueue_style( 'fontawesome-css' ,get_template_directory_uri().'/assets/modules/fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css',array(),$version,'all');
    wp_enqueue_style( 'aos-css' ,get_template_directory_uri().'/assets/modules/aos-master/dist/aos.css',array(),$version,'all');
    // ---
    // wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/modules/aos-master/dist/aos.css');
    // ---
    wp_enqueue_style('bootstrap5-css', get_template_directory_uri() . '/assets/modules/bootstrap-5.2.2-dist/css/bootstrap.min.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/modules/swiper/css/swiper-bundle.min.css');
    // ---
    wp_enqueue_style('main-css', get_template_directory_uri() . "/assets/css/main.css", array(), $version, 'all');

    //send main_url to main.js
    wp_enqueue_script('bootstrap5-min-js', get_template_directory_uri() . '/assets/modules/bootstrap-5.2.2-dist/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/modules/swiper/js/swiper-bundle.min.js', array('jquery'), false, true);
   
    wp_enqueue_script( 'ajax-pagination',  get_stylesheet_directory_uri() . '/assets/js/ajax-pagination.js', array( 'jquery' ), false , true );

    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/main.js", array('jquery'), false, true);
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/modules/aos-master/dist/aos.js', array('jquery'), false, true);

    // wp_localize_script('main-js', 'service', [
    //     'main_url' => get_admin_url() . 'admin-ajax.php'
    // ]);
    wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
}
add_action('wp_enqueue_scripts', 'p4c_register_scripts_styles');


// Add menu nav bar
function add_nav_menus() {
    register_nav_menus( array(
     'header' => 'header'
    ));
}
add_action('init', 'add_nav_menus');



// add media query for mobile 

function hook_nocache() {
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
}
add_action('wp_head', 'hook_nocache');

//register acf options page

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Options',
        'menu_title'    => 'Options',
        'menu_slug'     => 'options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));    

    
}





//create custom post 
function create_posttype() {
  
    register_post_type( 'products',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
  
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'products' ) );
    return $query;
}


//hook into the init action and call create_book_taxonomies when it fires
  
add_action( 'init', 'create_Vegetables_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it Vegetables for your posts
  
function create_Vegetables_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Vegetables', 'taxonomy general name' ),
    'singular_name' => _x( 'Vegetable', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Vegetables' ),
    'all_items' => __( 'All Vegetables' ),
    'parent_item' => __( 'Parent Vegetable' ),
    'parent_item_colon' => __( 'Parent Vegetable:' ),
    'edit_item' => __( 'Edit Vegetable' ), 
    'update_item' => __( 'Update Vegetable' ),
    'add_new_item' => __( 'Add New Vegetable' ),
    'new_item_name' => __( 'New Vegetable Name' ),
    'menu_name' => __( 'Vegetables' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('vegetables',array('products'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'vegetable' ),
  ));
  
}


  add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
  add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

    
  function my_ajax_pagination() {  
    //get data slug from ajax request   
    $slug = $_POST['slug'];


    $args = array( 'post_type' => 'products', 'posts_per_page' => -1 ,'vegetables'=> $slug,'post_status' => ['publish']);
    $the_query = new WP_Query( $args ); 
    
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    
        echo '<div class="col-md-6 col-lg-4 col-s1 mb-4" >

            <div class="card card-s1" style="height:100%">
                <div class="img-card-s1">
                    <img src="'.get_field('img',get_the_ID()).'">          </div>
                    <div class="card-body card-body-s1">
                        
                        
                        <h5 class="card-title card-title-s1 title">'.get_field("title",get_the_ID())." ".get_field('quantity',get_the_ID()).get_field('unit',get_the_ID()).'</h5>
                                <p class="card-text card-text-s1" style="
                                flex-grow: 2;
                            ">'.get_field('short_description',get_the_ID()).'</p>
                            <a href="'.get_permalink(get_the_ID()).'" class="ctm-btn-1 btn btn-primary col-md-8 col-9 m-auto">Learn More</a>
                                </div>
                            </div>
                        </div>';
         endwhile;
        wp_reset_postdata(); 
         else:  
         echo '<div class="alert alert-danger" role="alert" style="width: 95%;margin: auto;" >There are no products yet.</div>';
         endif;
    
      die();
  }




  ////News

  //create custom post 
function create_posttype_news() {
  
    register_post_type( 'news',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'News Post' ),
                'singular_name' => __( 'New Post' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_news' );


add_action( 'wp_ajax_nopriv_ajax_pagination_news', 'my_ajax_pagination_news' );
add_action( 'wp_ajax_ajax_pagination_news', 'my_ajax_pagination_news' );

  
function my_ajax_pagination_news() {     
$offset = $_POST['offset'];
    $args = array( 'post_type' => 'news', 
                        'meta_key' => 'featured',
                        'offset' => $offset  ,
                        'meta_value' => 'no','post_status' => ['publish']); 

                        $the_query = new WP_Query( $args ); 

                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
$desc = get_field('new_description',get_the_ID(  )) ? get_field('new_description',get_the_ID(  )) : '<div style="text-align:center">N/A</div>';

      echo '<div class="col-md-6 col-lg-4 p-0 mb-5 col-s2">
      <div class="cont">
      <div class="imgcont" >
          <img src="'. get_field('new_img',get_the_ID()).'" alt="" >
        </div>
          <div class="mt-3 date">'.get_field('new_date',get_the_ID()).'</div>
          <div class="content"><div class="title">'.get_field('new_title',get_the_ID()).'</div>
          <div class="desc mt-3 mb-3">
              '.$desc.'
          </div>
          <div>
          <div class="ctm-btn w-50">
              <a href="'.get_permalink().'">
                  Read More
              </a>
          </div>
          </div>
          </div>
      </div>
  </div>';

                    endwhile;
                    wp_reset_postdata(); 
                     else:  
                     echo '<div class="alert alert-danger" role="alert" style="width: 95%;margin: auto;" >There are no news yet.</div>';
                     endif;
  
    die();

}


function getPageByName($name){

    $pages = get_pages(  array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'templates/template-'.$name.'.php'
    ));
foreach ( $pages as $page ) {

if(str_contains($page -> post_title,ucfirst($name)) || str_contains($page -> post_title,strtoupper($name)) || str_contains($page -> post_title,strtolower($name))) {
    if(str_contains($page -> post_name,strtolower($name))){
        return $page;
    }}

}
return null;

}