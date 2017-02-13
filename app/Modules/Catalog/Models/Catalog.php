<?php

namespace App\Modules\Catalog\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;
use App\Models\Filters;

/**
 * App\Modules\Catalog\Models\Catalog
 *
 * @property int $id
 * @property string $lang
 * @property int $category_id
 * @property string $date
 * @property string $code
 * @property string $title
 * @property string $preview
 * @property string $content
 * @property string $image
 * @property string $size
 * @property string $power
 * @property string $electrical
 * @property bool $electrical_active
 * @property string $technical
 * @property bool $technical_active
 * @property string $meta_title
 * @property string $meta_h1
 * @property string $meta_keywords
 * @property string $meta_description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Modules\Category\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Catalog\Models\Document[] $documents
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereElectrical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereElectricalActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereMetaDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereMetaH1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereMetaKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog wherePower($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereTechnical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereTechnicalActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $document1
 * @property string $name1
 * @property string $document2
 * @property string $name2
 * @property string $document3
 * @property string $name3
 * @property string $document4
 * @property string $name4
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereDocument1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereDocument2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereDocument3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereDocument4($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereName1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereName2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereName3($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Catalog\Models\Catalog whereName4($value)
 */
class Catalog extends Model
{
    use Notifiable, Sortable, Image, Filters;

    protected $table = 'catalog';

    public $filters = [
        'category_id'=> ['category_id','=' ,'?']
    ];

    public function scopeOrder($query){

        return $query->orderBy('date', 'desc');
    }

    public function category(){
        return $this->hasOne('App\Modules\Category\Models\Category', 'category_id', 'id');
    }
}
