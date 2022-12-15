<?php

namespace App\Models\Core\Mobile;

use App\Enums\MobileServiceTypeUnitEnum;
use App\Enums\MobileServiceUnitEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileServicePrice
 *
 * @property int $id
 * @property float $price
 * @property string $unit minute: tarif à la minute / heure: tarif à l'heure utilisé (post 1 minute) / Forfait: Tarif unique
 * @property int $mobile_service_id
 * @property-read \App\Models\Core\Mobile\MobileService $service
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice whereMobileServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice whereUnit($value)
 * @mixin \Eloquent
 * @property string|null $type_unit data,call,sms,mms
 * @property int $restricted_by_package
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice whereRestrictedByPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServicePrice whereTypeUnit($value)
 */
class MobileServicePrice extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'type_unit' => MobileServiceTypeUnitEnum::class,
        'unit' => MobileServiceUnitEnum::class
    ];

    public function service()
    {
        return $this->belongsTo(MobileService::class, 'mobile_service_id');
    }
}
