<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomProduct
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $garantie
 * @property float $amount_garantie
 * @property int $active
 * @property int $telecom_product_category_id
 * @property-read \App\Models\Core\Telecom\TelecomProductCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereAmountGarantie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereGarantie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProduct whereTelecomProductCategoryId($value)
 * @mixin \Eloquent
 */
class TelecomProduct extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(TelecomProductCategory::class, 'telecom_product_category_id');
    }
}
