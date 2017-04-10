## WPAdminPageRender Class
/**
 * Class Name: WPAdminPageRender
 * Class URI: https://github.com/nikolays93/WPAdminPageRender
 * Description: Create a new custom admin page.
 * Version: 1.0
 * Author: NikolayS93
 * Author URI: https://vk.com/nikolays_93
 */

### How to use: ###
```php
$page_slug = 'page_name';
$args = array(
    'parent' => 'options-general.php',
    'title' => __('Test Page h1 Title','domain'), // default: ''
    'menu' => __('Test page','domain'),
    'permissions' => 'manage_options'
    );
$option_name = 'custom_option';

$page = new WPAdminPageRender( $page_slug*, $args*, 'page_body'*, $option_name, 'validate_callback' );

function page_body(){
    echo 'TEST PAGE';
}
function validate_callback( $post_content ){
    $post_content = array_filter($post_content);
    return $post_content;
}
```
\* \- required (dont forget remove stars)

- use $args as array() for defaults;
- $option_name = string ( will set page_slug is default )
- validate_callback = string - callback function name for validate ( has default callback )

### Metaboxes: ###
```php
// set 2 columns on page
add_filter( $page_slug . '_columns', function(){return 2;} );

$page->add_metabox( $handle*, $label*, $render_cb*, $position = 'normal', $priority = 'high')
```
\* \- required (dont forget remove stars)

### used hooks: ###
     * $pageslug . _after_title (default empty hook)
     * $pageslug . _before_form_inputs (default empty hook)
     * $pageslug . _inside_page_content
     * $pageslug . _inside_side_container
     * $pageslug . _inside_advanced_container
     * $pageslug . _after_form_inputs (default empty hook)
     * $pageslug . _after_page_wrap (default empty hook)

### todo: ###
- add support - create MAIN menu (parent, not child\sub )