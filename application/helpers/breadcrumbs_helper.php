<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function create_breadcrumbs($items) {
    $ci = &get_instance();
    $ci->load->helper('url');

    $breadcrumbs = [['name' => 'Home', 'url' => base_url()]];

    foreach ($items as $item) {
        $breadcrumbs[] = ['name' => $item['name'], 'url' => base_url($item['url'])];
    }

    $last_key = count($breadcrumbs) - 1;
    $breadcrumbs[$last_key]['url'] = '';

    return $breadcrumbs;
}