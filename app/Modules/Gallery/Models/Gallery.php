<?php
namespace App\Modules\Gallery\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image as Img;

/**
 * App\Modules\Gallery\Models\Gallery
 *
 * @property int $id
 * @property int $priority
 * @property bool $active
 * @property string $date
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_ky
 * @property string $preview_en
 * @property string $preview_ru
 * @property string $preview_ky
 * @property string $content_en
 * @property string $content_ru
 * @property string $content_ky
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property mixed $content
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property mixed $preview
 * @property mixed $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Gallery\Models\Image[] $images
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereContentEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereContentKy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereContentRu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery wherePreviewEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery wherePreviewKy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery wherePreviewRu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereTitleEn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereTitleKy($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereTitleRu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Gallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Gallery extends Model
{

    use Notifiable, Sortable, Img;

    protected $table = 'gallery';


    public function scopeOrder($query){

        return $query->orderBy('priority', 'desc')->orderBy('date', 'desc');
    }


    public function images() {
        return $this->hasMany("App\Modules\Gallery\Models\Image", 'parent_id', 'id');
    }

    public function getTitleAttribute()
    {
        return $this->{'title_' . lang()};
    }

    public function setTitleAttribute($value)
    {
        $this->{'title_' . lang()} = $value;
    }

    public function getPreviewAttribute()
    {
        return $this->{'preview_' . lang()};
    }

    public function setPreviewAttribute($value)
    {
        $this->{'preview_' . lang()} = $value;
    }


    public function getContentAttribute()
    {
        return $this->{'content_' . lang()};
    }

    public function setContentAttribute($value)
    {
        $this->{'content_' . lang()} = $value;
    }




}
