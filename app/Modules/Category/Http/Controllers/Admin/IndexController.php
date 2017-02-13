<?php

namespace App\Modules\Category\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Category\Models\Category;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use App\Modules\Admin\Http\Controllers\Priority;

class IndexController extends Admin
{

    use Priority;
    public $perPage = 100;


    public function getModel()
    {
        return new Category();
    }

    public function getRules($request, $id = false)
    {
        $rules = [];


        $rules['slug'] = [
            'sometimes', 'required', 'regex:/(^[A-Za-z0-9_\-]+$)+/', 'max:60',
            Rule::unique('categories')->ignore($id)->where('lang', lang())
        ];

        $rules['title'] = 'sometimes|required|max:255';

        return $rules;
    }


    protected function after($entity)
    {
        if (action() == 'store' || action() == 'update') {

            $parentId = (int)Request::get('parent_id');

            if ($parentId && $parentId!=$entity->parent_id) {

                $parent = $this->getModel()->findOrFail($parentId);
                try {
                    $entity->makeChildOf($parent);
                } catch (\Baum\MoveNotPossibleException $e) {
                    redirect()->back()->withErrors([trans('category::admin.unable_to_move')]);
                }
            }


        }
    }


}
