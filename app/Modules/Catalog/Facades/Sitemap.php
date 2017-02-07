<?php
namespace App\Modules\Catalog\Facades;

use App\Modules\Sitemap\Sitemap as BaseSitemap;

class Sitemap extends BaseSitemap {
    public $route = 'catalog';

    public function getUrl( $row )
    {

        if ( count(config('localization.supported-locales')) > 1 ){
            return url(\Lang::locale() . '/' . $this->route . '/' . $row->category_id,['id' => $row->getRouteKey()]);
        }
        else{
            return url( $this->route, ['id' => $row->getRouteKey()] );
        }
    }
}
