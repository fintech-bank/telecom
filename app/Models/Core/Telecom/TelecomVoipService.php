<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomVoipService
 *
 * @property int $id
 * @property int $reception_phone
 * @property int $sim_calls
 * @property int $redirect_call
 * @property int $filter_call
 * @property int $svi
 * @property int $show_number
 * @property int $share_contact
 * @property int $restricted_call
 * @property int $mask_number
 * @property int $messagerie
 * @property int $restricted_ip
 * @property int $security_deposit
 * @property int $diagnosis_line
 * @property int $portability_number
 * @property int $telecom_voip_offer_id
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereDiagnosisLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereFilterCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereMaskNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereMessagerie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService wherePortabilityNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereReceptionPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereRedirectCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereRestrictedCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereRestrictedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereSecurityDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereShareContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereShowNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereSimCalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereSvi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipService whereTelecomVoipOfferId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Core\Telecom\TelecomVoipOffer $VoipOffer
 */
class TelecomVoipService extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function VoipOffer()
    {
        return $this->belongsTo(TelecomVoipOffer::class, 'telecom_voip_offer_id');
    }
}
