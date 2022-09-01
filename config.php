<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Novak', // todo
    'siteDescription' => 'Website description.', // todo
    
    'collections' => [
        'pages' => [],
        'posts' => [
            'path' => 'posts',
            'extends' => '_layouts.post',
            'section' => 'content',
        ],
    ],
    
    'jocko_api' => [
        'url' => env('JOCKO_API_URL'),
        'token' => env('JOCKO_API_TOKEN'),
    ],
];
