<?php

function api_estados_get($request) {
    $response = $request["id"];

    $dadosJson = file_get_contents('C:\Users\daniel martins\Local Sites\danielapilocal\app\public\wp-content\themes\api\data\data.json');

    $dadosDecod = json_decode($dadosJson);

    return rest_ensure_response($dadosDecod);
}

function registrar_api_estados_get() {
    register_rest_route('api', '/estados', array(
        array(
            'methods'  => WP_REST_Server::READABLE,
            'callback' => 'api_estados_get',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_estados_get');
