<?php
namespace App\Modules\Gallery\Models;
use App\Models\Model;
use App\Models\Image as Img;

/**
 * App\Modules\Gallery\Models\Image
 *
 * @property int $id
 * @property string $image
 * @property int $position
 * @property int $parent_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $image_full
 * @property-read mixed $image_mini
 * @property-read mixed $image_thumb
 * @property-read \App\Modules\Gallery\Models\Gallery $parent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model admin()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Model filtered()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image order()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Gallery\Models\Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Image extends Model
{

    use Img;

    protected $table = 'gallery_images';

    public function imagePrefixPath(){
        return '/uploads/gallery/';
    }

    public function getParentModel(){
        return new Gallery();
    }

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($model) {
            with(new static)->afterSave($model);
        });

        static::deleted(function ($model) {
            with(new static)->afterSave($model);
        });


        with(new static)->addGlobalScopes();


    }

    public function afterSave($entity){
        $parent = $entity->parent;
        $parent->image = $this->order()->where('parent_id', $entity->parent_id)->pluck('image')->first();
        $parent->save();
    }



    public function scopeOrder($query){

        return $query->orderBy('position')->orderBy('id', 'desc');
    }

    public function parent() {
        return $this->belongsTo($this->getParentModel(), 'parent_id');
    }


}
