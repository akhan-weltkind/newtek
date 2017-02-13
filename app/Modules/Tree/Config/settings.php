<?php
return [

    'title'=>trans('tree::admin.title'),
    'localization'=>true,
    "modules"=>[""=>"",
        "news"=>trans('news::admin.title'),
        "feedback"=>trans('feedback::admin.title'),
        "catalog"=>trans('catalog::admin.title'),
        "project"=>trans('project::admin.title')],
    "templates"=> [
        "inner"=>trans('tree::admin.templates.inner'),
        "index"=>trans('tree::admin.templates.index'),
        "list"=>trans('tree::admin.templates.list'),
    ]
];