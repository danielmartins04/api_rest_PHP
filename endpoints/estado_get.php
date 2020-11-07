<?php

function api_estado_get($request) {
    $id_estado = $request["id"];

    $dadosJson = file_get_contents('C:\Users\daniel martins\Local Sites\danielapilocal\app\public\wp-content\themes\api\data\data.json');

    $dadosDecod = json_decode($dadosJson);

    $estado = [];

    foreach ($dadosDecod as $key => $content) {
        if($key == $id_estado - 1) {
            $estado = $content;
            break;
        }
    }

    return rest_ensure_response($estado);
}

function registrar_api_estado_get() {
    register_rest_route('api', '/estados/(?P<id>[0-9]+)', array(
        array(
            'methods'  => WP_REST_Server::READABLE,
            'callback' => 'api_estado_get',
        ),
    ));
}

add_action('rest_api_init', 'registrar_api_estado_get');
