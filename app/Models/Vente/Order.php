<?php

namespace App\Models\Vente;

use App\Enums\PaymentConditionEnum;
use App\Enums\ReccurenceEnum;
use App\Models\Abonnement\Abonnement;
use App\Models\CRM\Customer;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vente\Order
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
 * @property int $devis_id
 * @property-read Customer $customer
 * @property-read \App\Models\Vente\Devis $devis
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereExpirationAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereRecurrence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $abonnement_id
 * @property-read Abonnement|null $abonnement
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAbonnementId($value)
 */
class Order extends Model
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

    public function devis()
    {
        return $this->belongsTo(Devis::class, 'devis_id');
    }

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class, 'abonnement_id');
    }
}
