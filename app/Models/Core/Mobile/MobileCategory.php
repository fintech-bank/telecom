<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileCategory
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|MobileCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileCategory whereName($value)
 * @mixin \Eloquent
 */
class MobileCategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
