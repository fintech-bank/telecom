<?php

namespace App\Models\Core\Mobile;

use App\Enums\MobileProductPriceTypePriceEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileProductPrice
 *
 * @property int $id
 * @property string $color
 * @property string $capacity
 * @property MobileProductPriceTypePriceEnum $type_price
 * @property float $price
 * @property float|null $price_start Si Typeprice = FLY
 * @property float|null $opt_achat_price Si Typeprice = FLY
 * @property int $qte
 * @property int $qte_alert
 * @property int $mobile_product_id
 * @property-read \App\Models\Core\Mobile\MobileProduct $product
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereMobileProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereOptAchatPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice wherePriceStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereQte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereQteAlert($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductPrice whereTypePrice($value)
 * @mixin \Eloquent
 */
class MobileProductPrice extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'type_price' => MobileProductPriceTypePriceEnum::class
    ];

    public function product()
    {
        return $this->belongsTo(MobileProduct::class, 'mobile_product_id');
    }
}
