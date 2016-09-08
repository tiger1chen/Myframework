<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 9:01
 */
$config = array(
    'home'=>array(
        'decorator'=>array(
            'App\Decorator\Json',
            'App\Decorator\Xml',
           // 'App\Decorator\Login'
        )
    )
);
return $config;