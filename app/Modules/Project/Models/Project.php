<?php
namespace App\Modules\Project\Models;

use App\Models\Model;
use App\Models\Image as Img;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;

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
