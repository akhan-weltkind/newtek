<?php
namespace App\Modules\Articles\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;
use App\Models\Filters;

/**
 * App\Modules\Articles\Models\Article
 *
 * @property int $id
 * @property string $lang
 * @property int $priority
 * @property string $title
 * @property string $date
 * @property string $preview
 * @property string $content
 * @property string $image
 * @property bool $active
 * @property string $meta_title
 * @property string $meta_h1
 * @property string $meta_keywords
 * @property string $meta_description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereMetaDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereMetaH1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereMetaKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Articles\Models\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{

    use Notifiable, Sortable, Image, Filters;

    public $filters = [
        'title'=> ['title', 'LIKE', '%?%']
    ];

    public function scopeOrder($query){

        return $query->orderBy('priority', 'desc')->orderBy('date', 'desc');
    }



}
