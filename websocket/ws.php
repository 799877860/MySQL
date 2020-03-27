<?php
/**
 * websocket 服务端代码
 */
$server = new Swoole\WebSocket\Server("0.0.0.0", 9501);

// 客户端连接服务器
$server->on('open', function (Swoole\WebSocket\Server $server, $request) {
    echo "与客户端：{$request->fd} 已成功连接\n";
});

// 客户端向服务器发送数据
$server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
    echo "信息来自 {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
    $server->push($frame->fd, "你好，我是服务器");
});

// 客户端断开连接
$server->on('close', function ($ser, $fd) {
    echo "客户端 {$fd} 已断开连接\n";
});

$server->start();