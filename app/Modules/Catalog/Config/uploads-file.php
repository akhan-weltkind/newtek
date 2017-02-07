<?php
return [
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