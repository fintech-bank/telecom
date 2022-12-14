<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileLineService
 *
 * @property int $id
 * @property int $antispam_voice
 * @property int $antispam_voice_redirect
 * @property int $reject_anonymous_call
 * @property int $reject_anonymous_call_redirect
 * @property int $forwarding_abroad
 * @property int $protect_forwarding
 * @property int $absent_subscriber
 * @property int $abbreviated_numbers table
 * @property int $filter_call_sms_mms table
 * @property int $mobile_line_id
 * @property-read \App\Models\Mobile\MobileLine $mobile
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereAbbreviatedNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereAbsentSubscriber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereAntispamVoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereAntispamVoiceRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereFilterCallSmsMms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereForwardingAbroad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereMobileLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereProtectForwarding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereRejectAnonymousCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineService whereRejectAnonymousCallRedirect($value)
 * @mixin \Eloquent
 */
class MobileLineService extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function mobile()
    {
        return $this->belongsTo(MobileLine::class, 'mobile_line_id');
    }
}
