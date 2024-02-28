<?php
//Custom Functions
require_once 'class-wp-bootstrap-navwalker.php';
require_once 'Multi_Image_Custom_Control.php';

// require_once('WP_Customize_Schedule_Fields_Control.php');
// Bootstrap navigation
function bootstrap_nav($location = 'Main', $class = 'navbar-nav')
{
  wp_nav_menu(array(
    'theme_location' => $location,
    'depth' => 2,
    'container' => 'false',
    'menu_class' => $class,
    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker())
  );
}

function register_header_menu()
{
  register_nav_menus(
    array(
      'Main' => __('tuncurry', 'tuncurryconcreting'),
      'footer' => __('Footer Menu', 'tuncurryconcreting'),
    )
  );
}

add_action('init', 'register_header_menu');


function edit_button($wp_customize, $args)
{
  $id = $args['id'];
  $wp_customize->selective_refresh->add_partial(
    $args['id'],
    array(
      'selector' => ".$id",
      'render_callback' => 'call_back',
      'render_callback_args' => $id,
    )
  );
}

function add_field($wp_customize, $args)
{

  if (empty($args['id'])) {
    return;
  }
  $type = empty($args['input_type']) ? 'text' : $args['input_type'];
  add_setting($wp_customize, $args);
  $wp_customize->add_control(new WP_Customize_Control(
    $wp_customize,
    $args['id'],
    array(
      'label' => __(empty($args['label']) ? 'Unlabel' : $args['label'], 'codecrewz_janeins'),
      'priority' => empty($args['priority']) ? 9 : $args['priority'],
      'section' => empty($args['section']) ? 'title_tagline' : $args['section'],
      'type' => $type,
      'render_callback' => empty($args['render_callback']) ? null : $args['render_callback'],
    )
  ));
}

function add_setting($wp_customize, $args)
{
  $wp_customize->add_setting(
    $args['id'],
    array(
      'default' => empty($args['default']) ? '' : $args['default'],
      'type' => 'theme_mod', // you can also use 'theme_mod'
      'capability' => 'edit_theme_options',
      'transport' => empty($args['transport']) ? 'postMessage' : $args['transport'],
    ),
  );
}

function create_image_list($wp_customize, $args)
{
  if (empty($args['id'])) {
    return;
  }
  add_setting($wp_customize, $args);
  $wp_customize->add_control(
    new Multi_Image_Custom_Control(
      $wp_customize,
      $args['id'],
      array(
        'label' => __(empty($args['label']) ? 'Unlabel' : $args['label'], 'codecrewz_janeins'),
        'description' => __(empty($args['description']) ? '' : $args['description'], 'codecrewz_janeins'),
        'section' => empty($args['section']) ? 'title_tagline' : $args['section'],
        'settings' => $args['id'],
        'priority' => empty($args['priority']) ? 9 : $args['priority'],
        'height' => empty($args['height']) ? 900 : $args['height'],
        'width' => empty($args['width']) ? 1920 : $args['width'],
        'max' => empty($args['max']) ? 10 : $args['max'],
        // 'fit' => $args['fit'],
      )
    )
  );
}


function switch_case($wp_customize, $array)
{
  $ids = '';
  foreach ($array as $item) {
    switch ($item['type']) {
      case 'image':
        create_image($wp_customize, $item);
        break;
      case 'image_list':
        create_image_list($wp_customize, $item);
        break;
      case 'field':
        add_field($wp_customize, $item);
        break;
      case 'section':
        create_section($wp_customize, $item);
        break;
      default:
        break;
    }
    edit_button($wp_customize, $item);
    $ids .= '"' . $item['id'] . '",';
  }
//  do_action( 'wp_head', "$ids" ) ;
} 

function create_image($wp_customize, $args)
{
  if (empty($args['id'])) {
    return;
  }
  $wp_customize->add_setting($args['id']);
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      $args['id'],
      array(
        'label' => __(empty($args['label']) ? 'Unlabel' : $args['label'], 'codecrewz_janeins'),
        'section' => empty($args['section']) ? 'title_tagline' : $args['section'],
        'settings' => $args['id'],
        'priority' => empty($args['priority']) ? 9 : $args['priority'],
      )
    )
  );
}

function create_section($wp_customize, $args)
{
  if (empty($args['id'])) {
    return;
  }
  $wp_customize->add_section(
    $args['id'],
    array(
      'priority' => empty($args['priority']) ? 5 : $args['priority'],
      'capability' => 'edit_theme_options',
      'theme_supports' => '',
      'title' => __(empty($args['title']) ? 'Section ' : $args['title'], 'codecrewz_janeins'),
      'description' => empty($args['description']) ? '' : $args['description'],
      'panel' => empty($args['panel']) ? 'my_custom_home_page_customize' : $args['panel'],
    ));
}

function my_register_additional_customizer_settings($wp_customize)
{

  // Page Setting Panel
  $wp_customize->add_panel('my_custom_home_page_customize', array(
    'priority' => 0,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Pages Setting', 'codecrewz_janeins'),
    'description' => __('Customize Pages', 'codecrewz_janeins'),
  ));

  $fields = [
    // Site Idenity new fields
    ['type' => 'image', 'id' => 'secondary_logo', 'label' => 'Secondary Logo', 'section' => 'title_tagline'],
    ['type' => 'field', 'id' => 'owner', 'label' => 'Owner Name'],
    ['type' => 'field', 'id' => 'phone', 'label' => 'Phone Number'],
    ['type' => 'field', 'id' => 'email', 'label' => 'Email Address', 'input_type' => 'email'],
    ['type' => 'field', 'id' => 'address', 'label' => 'Address', 'input_type' => 'textarea'],
    ['type' => 'field', 'id' => 'abn', 'label' => 'ABN', 'input_type' => 'number'],
    ['type' => 'field', 'id' => 'map', 'label' => 'Map Address'],
    ['type' => 'field', 'id' => 'working_hours', 'label' => 'Working Hours', 'input_type' => 'textarea'],
    ['type' => 'field', 'id' => 'facebook', 'label' => 'Facebook URL', 'input_type' => 'url'],
    ['type' => 'field', 'id' => 'instagram', 'label' => 'Instagram URL', 'input_type' => 'url'],
    ['type' => 'field', 'id' => 'twitter', 'label' => 'Twitter URL', 'input_type' => 'url'],
    ['type' => 'field', 'id' => 'youtube', 'label' => 'YouTube URL', 'input_type' => 'url'],
    ['type' => 'image_list', 'id' => 'review_list', 'label' => 'Review Url', 'description' => 'Review Image (380 X 200)'],

    // Home Page Sesction and fields
    ['type' => 'section', 'id' => 'home_page', 'title' => 'Home Page', 'description' => 'Home Page Customize'],
    ['type' => 'image', 'id' => 'custom_header_image', 'label' => 'custom_header_image', 'description' => 'custom_header_image', 'section' => 'home_page'],
    ['type' => 'image_list', 'id' => 'banner_image', 'label' => 'Banner Images', 'description' => 'Banner Image must be 1920 X 900', 'section' => 'home_page'],


    ['type' => 'field', 'id' => 'about_title', 'label' => 'About us ', 'section' => 'home_page'],
    ['type' => 'image', 'id' => 'about_image', 'label' => 'About us Image', 'section' => 'home_page'],
    

    ['type' => 'image_list', 'id' => 'testimonials', 'label' => 'Testimonials', 'description' => 'Image must Square', 'section' => 'home_page'],

    //Get a Free Quote Page Setting Panel
    ['type' => 'section', 'id' => 'quote_page', 'title' => 'Quote Page', 'description' => 'Quote Page Customize'],
    ['type' => 'image', 'id' => 'quote_image', 'label' => 'Quote Side Image', 'section' => 'quote_page'],
    // ['type' => 'image', 'id' => 'quote_image_background', 'label' => 'Quote Image Background', 'section' => 'quote_page'],
    //Footer Section
    ['type' => 'section', 'id' => 'footer_section', 'title' => 'Footer Section', 'description' => 'Footer Section Customize'],
    ['type' => 'field', 'input_type' => 'textarea', 'id' => 'footer_desc', 'label' => 'Footer Description', 'section' => 'footer_section'],
  ];
  switch_case($wp_customize, $fields);
}

add_action('customize_register', 'my_register_additional_customizer_settings');
add_action('customize_preview_init', function () {
  wp_enqueue_script(
    'custom-preview-button',
    get_template_directory_uri() . '/js/custom-preview.js',
    array('jquery', 'customize-preview'),
    time(),
    true
  );
});

function the_breadcrumb()
{

  $on_homepage = 0;
  /* Check for homepage first! */
  if (is_home() || is_front_page() || is_search()) {
    $on_homepage = 1;
  }

  /* Change according to your needs */
  $show_on_homepage = 0;
  $show_current = 1;
  $delimiter = '»';
  $before_wrap = '<span clas="current">';
  $after_wrap = '</span>';

  /* Don't change values below */
  $get_home_url = get_bloginfo('url');

  if (0 === $show_on_homepage && 1 === $on_homepage) {
    return;
  }

  /* Proceed with showing the breadcrumbs */
  $breadcrumbs = '<ol class="bread-row" itemscope itemtype="http://schema.org/BreadcrumbList">';

  $breadcrumbs .= '<li class="bread-list" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a class="bread-link" href="' . $get_home_url . '">Home</a></li>';

  global $post;
  global $title1;
  /* Build breadcrumbs here */
  if (!is_category()) {
    $breadcrumbs .= '<li class="bread-list" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a class="bread-link" href="' . get_permalink($post->ID) . '">' . get_the_title(($post->ID)) . '</a></li>';
    $title1 = get_the_title(($post->ID));
  } else {
    $cat_id = get_query_var('cat');
    $breadcrumbs .= categoryLink($cat_id);
  }
  $breadcrumbs .= '</ol>';
  ?>
<div class="breadcrumb-wrapper custom_header_image"><?php
        $image_url = get_theme_mod('custom_header_image');
  if (!empty($image_url)) {
    ?>
    <img class='attachment-post-thumbnail-background' src='<?=$image_url?>' alt='Breadcrumn' />
    <?php
}
  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$title1?></h1>
                <?=$breadcrumbs?>
            </div>
        </div>
    </div>
</div>
<?php
}