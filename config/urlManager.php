<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 21.01.17
 * Time: 10:07
 */
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        ['pattern'=>'', 'route'=>'/main/site/index'],
        ['pattern'=>'admin', 'route' => '/admin/sign-in/login'],
        ['pattern'=>'page/<slug>', 'route'=>'/main/page/view'],

    ],
];