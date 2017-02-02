<?php
namespace App\Modules\Project\Models;

use App\Models\Model;
use App\Models\Image as Img;

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
