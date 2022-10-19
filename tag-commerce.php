<?php
/**
 * Plugin Name: tag-commerce
 * Plugin URI: https://monema.it/
 * Description: teg commerce plugin
 * Version: 0.1
 * Author: monema srl
 * Author URI: https://monema.it/
 **/

wp_enqueue_script(
    'script', plugins_url('/js/tag-commerce.js', __FILE__)
);

wp_enqueue_style(
    'style', plugins_url('/css/tag-commerce.css', __FILE__)
);
function set_scripts_type_attribute($tag, $handle, $src)
{
    if ('script' === $handle) {
        $tag = '<script type="module" src="' . $src . '"></script>';
    }
    return $tag;
}
add_filter('script_loader_tag', 'set_scripts_type_attribute', 10, 3);
