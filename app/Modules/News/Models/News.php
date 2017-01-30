<?php
namespace App\Modules\News\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;

/**
 * App\Modules\News\Models\News
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
 * @property bool $on_main
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
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereMetaDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereMetaH1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereMetaKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereOnMain($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\News\Models\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{

    use Notifiable, Sortable, Image;

    public function scopeOrder($query){

        return $query->orderBy('date', 'desc');
    }



}
