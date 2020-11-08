<?php

function registrar_estados() {
    register_post_type('estados', array(
        'ID' => '',
        'Sigla' => '',
        'Nome' => ''
    ));
}

add_action('init', 'registrar_estados');
