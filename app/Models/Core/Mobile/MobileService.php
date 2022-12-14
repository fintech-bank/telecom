<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileService
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $mobile_category_id
 * @property-read \App\Models\Core\Mobile\MobileCategory|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService whereMobileCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileService whereName($value)
 * @mixin \Eloquent
 */
class MobileService extends Model
{
    protected $guarded = [];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo(MobileCategory::class);
    }
}
