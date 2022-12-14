<?php

namespace App\Models\Vente;

use App\Enums\PaymentConditionEnum;
use App\Enums\ReccurenceEnum;
use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vente\Devis
 *
 * @property int $id
 * @property string $reference
 * @property \Illuminate\Support\Carbon|null $expiration_at
 * @property \Illuminate\Support\Carbon|null $start_at Uniquement si abonnement
 * @property ReccurenceEnum|null $recurrence
 * @property PaymentConditionEnum $payment_condition
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $customer_id
 * @property-read Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereExpirationAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis wherePaymentCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereRecurrence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Devis extends Model
{
    protected $guarded = [];
    protected $dates = ["created_at", "updated_at", "expiration_at", "start_at"];
    protected $casts = [
        'recurrence' => ReccurenceEnum::class,
        'payment_condition' => PaymentConditionEnum::class
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
