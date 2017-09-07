## WPAdminPage Class
```
/**
 * Class Name: WP_Admin_Page
 * Class URI: https://github.com/nikolays93/WPAdminPage
 * Description: Create a new custom admin page.
 * Author: NikolayS93
 * Author URI: https://vk.com/nikolays_93
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
```

### How to use: ###
@see example.php

### Metaboxes: ###
```php
// set 2 columns on page

$page->add_metabox( $handle = 'req', $label = 'req', $render_cb = 'req', $position = 'normal', $priority = 'high');
..
$page->set_metaboxes();
```

### used hooks: ###
     * $pageslug . _after_title (default empty hook)
     * $pageslug . _before_form_inputs (default empty hook)
     * $pageslug . _inside_page_content
     * $pageslug . _inside_side_container
     * $pageslug . _inside_advanced_container
     * $pageslug . _after_form_inputs (default empty hook)
     * $pageslug . _after_page_wrap (default empty hook)
