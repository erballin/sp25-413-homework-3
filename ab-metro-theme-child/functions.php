<!-- functions.php — must enqueue both the parent stylesheet using get_template_directory_uri() the child stylesheet using get_stylesheet_uri(), with the child declared as dependent on the parent. 
 Must also include at least one additional WordPress filter or action hook not present in the parent theme. Choose from one of the following options or use your own (see Tips section below for code guidance):
    Option A: Use the excerpt_length filter to change the number of words shown in post excerpts
    Option B: Use register_sidebar() hooked to widgets_init to add a new widget area specific to the child theme
    Option C: Use any other valid WordPress filter or action hook of your choice — explain what it does in your readme.md
-->
<?php

function my_child_theme_enqueue_styles()
{
  $parent_style = 'my-simple-theme-style'; // Matches parent theme

  // Load in our parent style
  wp_enqueue_style(
    $parent_style,
    get_template_directory_uri() . '/style.css'
  );

  // Load our child style, making it dependent on the parent style
  wp_enqueue_style(
    'child-style',
    get_stylesheet_uri(),
    array($parent_style), // make it dependent on the main style
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');


// Custom excerpt_length
add_filter('excerpt_length', function ($length) {
  return 25;
});
