<?php
$data = [
    'errno' => 200,
    'msg'   => 'ok',
    'data'  => [
        'status'    => 1   // 0为未支付   1为已支付
    ]
];
echo json_encode($data);