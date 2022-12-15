<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileServiceSpec
 *
 * @property-read \App\Models\Core\Mobile\MobileService|null $service
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $call_hours
 * @property int $sms_count
 * @property int $mms_count
 * @property int $data_count
 * @property int $mobile_service_id
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereCallHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereDataCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereMmsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereMobileServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileServiceSpec whereSmsCount($value)
 */
class MobileServiceSpec extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(MobileService::class, 'mobile_service_id');
    }
}
