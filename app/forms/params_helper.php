<?php
function createUserParams (): array{
    $options = [
        'first_name' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'second_name' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ],
        'password_confirm' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ]
    ];

    return filter_input_array(INPUT_POST, $options);
}


function authUserParams (): array{
    $options = [
        'email' => FILTER_VALIDATE_EMAIL,
        'password' => [
            'flags' => FILTER_CALLBACK,
            'filter' => 'is_string'
        ]
    ];

    return filter_input_array(INPUT_POST, $options);
}