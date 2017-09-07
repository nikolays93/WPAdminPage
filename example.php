<?php

class NewModernPage extends WP_Admin_Page
{
    const PAGE = 'pagename';

    function __construct()
    {
        $this->add_page( PAGE, array(
            'parent' => 'options-general.php',
            'title' => __('New Modern Page'),
            'menu' => __('Modern Page'),
            ),
        array($this, 'page_render')
        );

        $this->add_metabox( 'metabox1', 'metabox1', array($this, 'metabox1_callback'), $position = 'normal');
        $this->add_metabox( 'metabox2', 'metabox2', array($this, 'metabox2_callback'), $position = 'normal');
        $this->set_metaboxes();
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