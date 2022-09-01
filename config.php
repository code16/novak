<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Novak',
    'description' => 'Website description.',
    'collections' => [
        'pages' => [
            'path' => 'pages',
            'extends' => '_layouts.page',
            'section' => 'content',
        ],
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
