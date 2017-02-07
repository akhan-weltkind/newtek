<?php
return [

    //file field
    'image' => [

        'path' => '/uploads/catalog/',

        'validator' => 'mimes:jpeg,jpg,png|max:10000',

        //Model field
        'field' => 'image',

        'thumbs' => [
            [
                'path' => 'thumb/',
                'width' => 166,
                'height' => false,
            ],
            [
                'path' => 'mini/',
                'width' => 150,
                'height' => false
            ]
        ]

    ],

];