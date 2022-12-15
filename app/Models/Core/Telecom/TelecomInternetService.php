<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomInternetService
 *
 * @property int $id
 * @property string $technology adsl,vdsl,fibre
 * @property string $debit_desc
 * @property string $debit_asc
 * @property int $telephony
 * @property int $email
 * @property int $tv
 * @property int $telecom_internet_offer_id
 * @property-read \App\Models\Core\Telecom\TelecomInternetOffer $offer
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereDebitAsc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereDebitDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereTechnology($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereTelecomInternetOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereTelephony($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetService whereTv($value)
 * @mixin \Eloquent
 */
class TelecomInternetService extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function offer()
    {
        return $this->belongsTo(TelecomInternetOffer::class, 'telecom_internet_offer_id');
    }
}
