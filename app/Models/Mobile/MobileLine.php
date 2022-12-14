<?php

namespace App\Models\Mobile;

use App\Enums\MobileLineStatusEnum;
use App\Models\Abonnement\Abonnement;
use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileLine
 *
 * @property int $id
 * @property string $number
 * @property \Illuminate\Support\Carbon $communication_france
 * @property \Illuminate\Support\Carbon $communication_ext
 * @property float $communication_hf_voix
 * @property MobileLineStatusEnum $status
 * @property int $nb_sms
 * @property int $nb_mms
 * @property int $nb_data
 * @property int $customer_id
 * @property int $abonnement_id
 * @property-read Abonnement $abonnement
 * @property-read Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereAbonnementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereCommunicationExt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereCommunicationFrance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereCommunicationHfVoix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereNbData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereNbMms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereNbSms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine whereStatus($value)
 * @mixin \Eloquent
 * @property string $puk_number
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLine wherePukNumber($value)
 */
class MobileLine extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = ["communication_france", 'communication_ext'];
    protected $casts = [
        'status' => MobileLineStatusEnum::class
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class, 'abonnement_id');
    }
}
