<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileServiceOption
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property int $mobile_category_id
 * @property-read \App\Models\Core\Mobile\MobileCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption whereMobileCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceOption wherePrice($value)
 * @mixin \Eloquent
 */
class MobileServiceOption extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(MobileCategory::class, 'mobile_category_id');
    }
}
