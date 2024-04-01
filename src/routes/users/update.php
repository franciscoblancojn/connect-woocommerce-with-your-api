<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function CWWYA_router_user_update() {
    $permission = "user_update";
    $run = "CWWYA_putUsers";
    return CWWYA_router_base($permission,$run);
}

function CWWYA_on_load_router_user_update()
{
    register_rest_route( 'cwwya', 'users/update', array(
      'methods' => 'POST',
      'callback' => 'CWWYA_router_user_update',
    ) );
}

add_action( 'rest_api_init', 'CWWYA_on_load_router_user_update' );