<?php
return [
    'groups' => [
        ['title' => trans('category::admin.groupName'), 'slug' => 'catalog', 'icon' => 'fa-newspaper-o', 'priority' => 1]
    ],

    'items' => [
        ['icon' => 'fa-th-list ', 'priority'=>1, 'group'=>'catalog', 'route' => 'admin.category.index', 'title' => trans('category::admin.title')]
    ]


];

