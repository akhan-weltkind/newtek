<?php
return [

    //file field
    'image' => [

        'path' => '/uploads/banners/',

        'validator' => 'mimes:jpeg,jpg,png,gif,swf|max:22000',

        //Model field
        'field' => 'image',

        'thumbs' => [
            [
                'path' => 'thumb/',
                'width' => 300,
                'height' => false,
            ],

            [
                'path' => 'mini/',
                'width' => 150,
                'height' => false,
            ],

        ]

    ],

];