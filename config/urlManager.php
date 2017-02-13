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
    'class' => 'codemix\localeurls\UrlManager',
    'languages' => ['en-US', 'ru-RU', 'uk-UA'],
     //'enableDefaultLanguageUrlCode' => true,
    'enableLanguagePersistence' => false,

    'rules' => [
        ['pattern'=>'', 'route'=>'/main/site/index'],
        ['pattern'=>'/admin', 'route' => '/admin/user/index'],
        ['pattern'=>'/page/<slug>', 'route'=>'/main/page/view'],

    ],

];