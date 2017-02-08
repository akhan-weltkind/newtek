<?php

namespace App\Modules\Catalog\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;
use Caffeinated\Modules\Facades\Module;
use Illuminate\Support\Facades\Route;

class Search extends BaseSearch
{
    public $tableName = 'catalog';
    public $routeName = 'catalog.show';

    public $dateField = 'date';

    public function getResult()
    {
        $sql = $this->getTable()
            ->select()
            ->where(function ($query){
                $query->where($this->getSearchSqlWhere(
                    $this->getQuery(),
                    array('title', 'preview', 'content','electrical','technical')
                ));
            })
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'catalog', trans('catalog::index.title'));
    }

    public function getUrl($row)
    {

        if (!$this->routeName || !Route::has($this->routeName)) {
            return '';
        }

        return route($this->routeName, ['id' => $row->id, 'category' => $row->category_id]);
    }

    public function getModuleHtml($nodes)
    {
        return view('catalog::search',['list' => $nodes]);
    }
}