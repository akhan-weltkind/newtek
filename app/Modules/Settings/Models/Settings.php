<?php
namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model ;

/**
 * App\Modules\Settings\Models\Settings
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Settings\Models\Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Settings\Models\Settings whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Settings\Models\Settings whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Settings\Models\Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Settings\Models\Settings whereValue($value)
 * @mixin \Eloquent
 */
class Settings extends Model
{

    public $timestamps = false;

    protected $fillable = ['key','value'];



}
