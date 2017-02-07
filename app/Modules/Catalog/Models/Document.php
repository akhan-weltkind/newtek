<?php

namespace App\Modules\Catalog\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;
use App\Models\Filters;;

/**
 * App\Modules\Catalog\Models\Document
 *
 * @property-read \App\Modules\Catalog\Models\Catalog $catalog
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Document filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Document order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Document sortable($defaultSortParameters = null)
 * @mixin \Eloquent
 */
class Document extends Model
{
    use Notifiable, Sortable, Image, Filters;

    public function scopeOrder($query){

        return $query->orderBy('priority', 'desc')->orderBy('date', 'desc');
    }

    public function catalog(){
        return $this->belongsTo('App\Modules\Catalog\Models\Catalog', 'catalog_id');
    }
}
