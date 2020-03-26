<?php
$response = [
    'errno' => 0,
    'msg'   => 'OK',
    'data'  => [
        'user_name' => "二弟",
        'age'       => '18cm'
    ]
];

echo json_encode($response);