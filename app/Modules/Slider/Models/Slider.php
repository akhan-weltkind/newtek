<?php
namespace App\Modules\Slider\Models;

use App\Models\Model;
use App\Models\Image as Img;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;


/**
 * App\Modules\Slider\Models\Slider
 *
 * @property int $id
 * @property string $lang
 * @property string $title
 * @property string $title_color
 * @property string $preview
 * @property string $preview_color
 * @property string $button
 * @property string $button_color
 * @property string $button_background
 * @property string $href
 * @property string $href_type
 * @property string $main_image
 * @property string $background_image
 * @property int $priority
 * @property bool $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereBackgroundImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereButton($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereButtonBackground($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereButtonColor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereHref($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereHrefType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereMainImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider wherePreviewColor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider wherePriority($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereTitleColor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Slider\Models\Slider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Slider extends Model
{
    use Notifiable, Sortable, Img;

    protected $table = 'slider';

    protected $guarded = array('id', 'created_at', 'updated_at');

    protected $fillable = [
        'title',
        'title_color',
        'preview',
        'button',
        'button_color',
        'button_background',
        'link',
        'link_type',
        'priority',
        'active'
    ];

    public function scopeOrder($query){
        return $query->orderBy('priority', 'asc')->orderBy('created_at', 'desc');
    }

}
