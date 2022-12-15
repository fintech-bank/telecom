<?php

namespace App\Models\Core\Mobile;

use App\Enums\MobileOfferTypeRemiseEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileProductOffer
 *
 * @property int $id
 * @property string $name
 * @property MobileOfferTypeRemiseEnum $type_remise
 * @property string $unit
 * @property string $unit_value
 * @property \Illuminate\Support\Carbon|null $start_at
 * @property \Illuminate\Support\Carbon|null $end_at
 * @property int $mobile_product_id
 * @property-read \App\Models\Core\Mobile\MobileProduct $product
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereMobileProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereTypeRemise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductOffer whereUnitValue($value)
 * @mixin \Eloquent
 */
class MobileProductOffer extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = ['start_at', 'end_at'];
    protected $casts = [
        'type_remise' => MobileOfferTypeRemiseEnum::class
    ];

    public function product()
    {
        return $this->belongsTo(MobileProduct::class, 'mobile_product_id');
    }
}
