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


        foreach ($sql as $item){
            $item->title = $this->getTitle($item);
            $item->content = $this->getContent($item);
            $item->preview = $this->getPreview($item);
        }

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

    /**
    * @param $result array|Collection Search results
    * @param $module string Module name
    * @param $title string Module title in view
    * @param bool $catalog Is catalog
    * @return array
    */
    public function addNodes($result, $module, $title, $catalog = false)
    {
        $resultArray = array();

        if ((is_object($result) && $result->count() >= 1) || (is_array($result) && count($result) >= 1)) {
            $resultArray[$module]['title'] = $title;
            $nodes = array();
            $resultArray[$module]['html'] = $this->getModuleHtml($result);

            foreach ($result as $num => $row) {
                $nodes[] = array(
                    'title' => $this->getTitle($row),
                    'url' => $this->getUrl($row),
                    'preview' => $this->getPreview($row),
                    'content' => $this->getContent($row),
                    'image'     => $row->image
                );
                self::$total++;

            }

            $resultArray[$module]['nodes'] = $nodes;

        }

        $resultArray = $this->postAdd($resultArray);

        return $resultArray;
    }
}