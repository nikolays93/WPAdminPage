<?php

require 'class-wp-admin-page.php';

class NewModernPage
{
    const PAGE = 'pagename';

    function __construct()
    {
        $page = new WP_Admin_Page();
        $page->set_args( PAGE, array(
            'parent'      => 'options-general.php',
            'title'       => '',
            'menu'        => 'New Modern Page',
            'callback'    => array($this, 'not_set_callback'),
            'validate'    => array($this, 'validate_options'),
            'permissions' => 'manage_options',
            'tab_sections'=> null,
            'columns'     => 2,
            ) );

        $page->add_metabox( 'metabox1', 'metabox1', array($this, 'metabox1_callback'), $position = 'normal');
        $page->add_metabox( 'metabox2', 'metabox2', array($this, 'metabox2_callback'), $position = 'side');
        $page->set_metaboxes();
    }
    /**
     * Основное содержимое страницы
     *
     * @access
     *     must be public for the WordPress
     */
    function page_render() {
        echo "page render callback";
    }
    /**
     * Тело метабокса вызваное функций $this->add_metabox
     *
     * @access
     *     must be public for the WordPress
     */
    function metabox1_callback() {
        echo "test1";
    }

    function metabox2_callback() {
        echo "test2";
    }
}
new NewModernPage();