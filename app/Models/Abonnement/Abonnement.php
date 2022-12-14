<?php

namespace App\Models\Abonnement;

use App\Enums\PaymentMethodEnum;
use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Abonnement\Abonnement
 *
 * @property int $id
 * @property int $cancel_at_period_end Booléen indiquant si cet abonnement doit être annulé à la fin de la période en cours.
 * @property PaymentMethodEnum $payment_method
 * @property \Illuminate\Support\Carbon $start_at
 * @property \Illuminate\Support\Carbon|null $end_at
 * @property string $recurrence
 * @property string $status
 * @property int $customer_id
 * @property-read Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereCancelAtPeriodEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereRecurrence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Abonnement whereStatus($value)
 * @mixin \Eloquent
 */
class Abonnement extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = ['start_at', 'end_at'];
    protected $casts = [
        'payment_method' => PaymentMethodEnum::class
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
