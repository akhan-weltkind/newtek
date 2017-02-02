<?php
return [

    //file field
    'main_image' => [

        'path' => '/uploads/project/',

        'validator' => 'mimes:jpeg,jpg,png|max:10000',
        //Model field
        'field' => 'main_image',

        'thumbs' => [
            [
                'path' => 'main/',
                'width' => 368,
                'height' => false,
                'thumb' => false
            ]
        ]
    ],

    'image' =>[
        'path' => '/uploads/project/',

        'validator' => 'mimes:jpeg,jpg,png|max:10000',
        //Model field
        'field' => 'image',

        'thumbs' => [
            [
                'path' => 'full/',
                'width' => 880,
                'height' => false,
                'full' => true
            ],

            [
                'path' => 'mini/',
                'width' => 130,
                'height' => false,
                'thumb' => true
            ],


        ]

    ]

];