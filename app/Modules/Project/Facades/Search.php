<?php

namespace App\Modules\Project\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;
use Caffeinated\Modules\Facades\Module;
use Illuminate\Support\Facades\Route;

class Search extends BaseSearch
{
    public $tableName = 'projects';
    public $routeName = 'projects.show';

    public $dateField = 'date';

    public function getResult()
    {
        $sql = $this->getTable()
            ->select()
            ->where(function ($query){
                $query->where($this->getSearchSqlWhere(
                    $this->getQuery(),
                    array('title', 'preview', 'content')
                ));
            })
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'project', trans('project::index.title'));
    }

    public function getUrl($row)
    {

        if (!$this->routeName || !Route::has($this->routeName)) {
            return '';
        }

        return route($this->routeName,$row->id);
    }
}