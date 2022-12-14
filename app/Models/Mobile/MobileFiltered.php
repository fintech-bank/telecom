<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileFiltered
 *
 * @property int $id
 * @property string $type
 * @property string|null $number
 * @property int $all_number
 * @property mixed|null $hourly
 * @property int $all_hourly
 * @property mixed|null $daily
 * @property int $all_daily
 * @property string $cible
 * @property string $action
 * @property int $mobile_service_id
 * @property-read \App\Models\Mobile\MobileLine $mobile
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereAllDaily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereAllHourly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereAllNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereCible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereDaily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereHourly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereMobileServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileFiltered whereType($value)
 * @mixin \Eloquent
 */
class MobileFiltered extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function mobile()
    {
        return $this->belongsTo(MobileLine::class, 'mobile_line_id');
    }
}
