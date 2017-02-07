<?php
namespace App\Modules\Project\Models;

use App\Models\Model;
use App\Models\Image as Img;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;

/**
 * App\Modules\Project\Models\Project
 *
 * @property int $id
 * @property string $lang
 * @property string $title
 * @property string $date
 * @property string $main_image
 * @property string $image
 * @property string $password
 * @property string $preview
 * @property string $content
 * @property bool $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Modules\Project\Models\Image[] $images
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project published()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project sortable($defaultSortParameters = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereLang($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereMainImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project wherePreview($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{

    use Notifiable, Sortable, Img;

    protected $table = 'projects';

    protected $guarded = array('id', 'created_at', 'updated_at');

    protected $appends = ['title', 'content'];

    public function images()
    {
        return $this->hasMany("App\\Modules\\Project\\Models\\Image", 'project_id', 'id');
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('date', 'desc')->orderBy('created_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->order()->where('active', 1);
    }

    public function imagePath($slug){

        $image = $this->main_image ;

        if (!$image){
            return false;
        }

        if (!is_file(public_path().'/uploads/project/main/'.$image)){
            return false;
        }

        return '/uploads/project/main/'.$image;
    }




}
