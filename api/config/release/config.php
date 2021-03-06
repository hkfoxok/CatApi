<?php
/**
 * Created by PhpStorm.
 * User: lidanyang
 * Date: 16/6/15
 * Time: 上午10:48
 */

return array(
    'project_name' => 'async_server',
    
    'ctrl_path' => 'api\\module',
    'callback' => 'server\\HttpServer',

    'project'=>array(
        'pid_path' => '/var/run',
    ),

    'socket' => array(
        'mode'          => SWOOLE_PROCESS,
        'socket_type'   => 'http',

        'host' => '0.0.0.0',
        'port' => 9501,
        'daemonize' => 1,
        
        // Work Process Config
        'worker_num' => 1,
        'dispatch_mode' => 2,

        'task_worker_num' => 1,
    ),
);
