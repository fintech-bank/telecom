<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileProduct
 *
 * @property int $id
 * @property string $name
 * @property string $synopsis
 * @property string $description
 * @property int $active
 * @property int $mobile_category_id
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereMobileCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereSynopsis($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $disponibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Core\Mobile\MobileCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereDisponibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereUpdatedAt($value)
 * @property string $marque
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProduct whereMarque($value)
 */
class MobileProduct extends Model
{
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at', 'disponibility'];

    public function category()
    {
        return $this->belongsTo(MobileCategory::class, 'mobile_category_id');
    }
}
