<?php
namespace App\Modules\Project\Models;

use App\Models\Model;
use App\Models\Image as Img;

/**
 * App\Modules\Project\Models\Image
 *
 * @property int $id
 * @property int $project_id
 * @property int $position
 * @property string $image
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \App\Modules\Project\Models\Project $parent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Image order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Image whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Image wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Project\Models\Image whereProjectId($value)
 * @mixin \Eloquent
 */
class Image extends Model
{
    use Img;

    protected $table = 'projects_images';
    public $timestamps = false;

    public function imagePrefixPath(){
        return '/uploads/project/';
    }

    public function parent(){
        return $this->belongsTo('App\Modules\Project\Models\Project', 'project_id');
    }

    public function scopeOrder($query)
    {
        return $query->orderBy('position');
    }

    public function getImageFullAttribute(){
        if (!$this->image){
            return false;
        }

        if (!is_file(public_path().'/uploads/project/full/'.$this->image)){
            return false;
        }

        return '/uploads/project/full/'.$this->image;
    }




}
