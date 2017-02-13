<?php
namespace App\Modules\Category\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;

class Category extends Model{

    use Sortable;

    protected $table = 'categories';

    public function scopeOrder($query){
        return $query->orderBy('priority', 'desc');
    }

    public function catalogs(){
        return $this->belongsToMany('App\Modules\Catalog\Models\Document', 'catalog_id');
    }
}