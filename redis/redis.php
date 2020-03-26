<?php
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->auth('www.1998');
    
    echo $redis->get('z');
