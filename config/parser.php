<?php
// SMARTY ( http://www.smarty.net/documentation )
// smarty configure
return [
    // smarty file extension
    'extension' => 'tpl',
    //
    'debugging' => false,
    // use cache
    'caching' => false,
    //
    'cache_lifetime' => 120,
    //
    'compile_check' => false,
    // delimiters
    // default "{$smarty}"
    'left_delimiter' => '{',
    'right_delimiter' => '}',
    // path info
    'template_path' => base_path() . '/resources/views',
    'cache_path' => base_path() . '/storage/smarty/cache',
    'compile_path' => base_path() . '/storage/smarty/compile',
    'plugins_paths' => [
        base_path() . '/vendor/smarty/smarty/libs/plugins',
    ]
];