<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function render_menu() {
    $ci = &get_instance();
    $ci->load->helper('url');
    $ci->config->load('menu');

    $menu_items = $ci->config->item('menu_items');
    
    echo '<ul class="menu">';
    foreach ($menu_items as $item) {
        $title = isset($item['title']) ? ' title="' . $item['title'] . '"' : '';
        $label = isset($item['label']) ? $item['label'] : strtoupper($item['href']);
        $fullHref = empty($item['href']) ? base_url() : base_url($item['href']);

        echo '<li>';
        echo '<a class="' . $item['class'] . '"' . $title .
             ' href="' . $fullHref . '" onclick="itemMenu(\'' . $item['class'] . '\')">' .
             $label . '</a>';
        echo '</li>';
    }
    echo '</ul>';
}