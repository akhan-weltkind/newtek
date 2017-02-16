<?php

namespace App\Modules\Banner\Models;

use App\Models\Model;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use App\Models\Image;


class Banner extends Model
{
    use Notifiable, Sortable, Image;

    public function scopeOrder($query){

        return $query->orderBy('priority','desc')->orderBy('created_at', 'desc');
    }
}
