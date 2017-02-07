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

    //file field
    'document1' =>[
        'path' => '/uploads/catalog/files',

        'validator' => 'mimes:doc,docx,pdf,xlsx,xls|max:15360',

        //Model field
        'field' => 'document1',
    ],

    'document2' =>[
        'path' => '/uploads/catalog/files',

        'validator' => 'mimes:doc,docx,pdf,xlsx,xls|max:15360',

        //Model field
        'field' => 'document2',
    ],

    'document3' =>[
        'path' => '/uploads/catalog/files',

        'validator' => 'mimes:doc,docx,pdf,xlsx,xls|max:15360',

        //Model field
        'field' => 'document3',
    ],

    'document4' =>[
        'path' => '/uploads/catalog/files',

        'validator' => 'mimes:doc,docx,pdf,xlsx,xls|max:15360',

        //Model field
        'field' => 'document4',
    ],

];