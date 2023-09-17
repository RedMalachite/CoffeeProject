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

function addToCartParams(): array{
    $options =[
        'product_id' => FILTER_VALIDATE_INT,
        'quantity' => FILTER_VALIDATE_INT,
        'additions' => [
            'flags' => FILTER_REQUIRE_ARRAY,
            'filter' => FILTER_VALIDATE_INT
        ],
        'additions_qty' => [
            'flags' => FILTER_REQUIRE_ARRAY,
            'filter' => FILTER_VALIDATE_INT
        ]
    ];
    dd(filter_input_array(INPUT_POST, $options));
    return filter_input_array(INPUT_POST, $options);
}