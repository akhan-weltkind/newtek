<?php
return [

    //file field
    'main_image' => [

        'path' => '/uploads/slider/',

        'validator' => 'mimes:jpeg,jpg,png|max:10000',

        //Model field
        'field' => 'main_image',

        'thumbs' => [
            [
                'path' => 'full/',
                'width' => 900,
                'height' => false,
                'full' => true
            ],

            [
                'path' => 'thumb/',
                'width' => 370,
                'height' => false,
            ],
            [
                'path' => 'mini/',
                'width' => 150,
                'height' => false,
            ],
        ]

    ],

    'background_image' =>[
    'path' => '/uploads/slider/',

    'validator' => 'mimes:jpeg,jpg,png|max:10000',
    //Model field
    'field' => 'background_image',

    'thumbs' => [
        [
            'path' => 'full/',
            'width' => 900,
            'height' => false,
            'full' => true
        ],

        [
            'path' => 'thumb/',
            'width' => 600,
            'height' => false,
        ],
        [
            'path' => 'mini/',
            'width' => 150,
            'height' => false,
        ],
    ]


]
];