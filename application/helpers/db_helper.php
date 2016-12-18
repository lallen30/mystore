<?php
/*
 * Get categories
 */
 function get_categories_help(){
     $CI = get_instance();
     $categories = $CI->Product_model->get_categories();
     return $categories;
 }

function get_popular_help(){
     $CI = get_instance();
     $CI->load->model('Product_model');
     $popular_products = $CI->Product_model->get_popular();
     return $popular_products;
}
