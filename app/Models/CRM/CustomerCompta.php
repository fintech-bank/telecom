<?php

namespace App\Models\CRM;

use App\Enums\PaymentConditionEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CRM\CustomerCompta
 *
 * @property PaymentConditionEnum $payment_condition
 * @property-read User $vendor
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerCompta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerCompta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerCompta query()
 * @mixin \Eloquent
 */
class CustomerCompta extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'payment_condition' => PaymentConditionEnum::class
    ];

    public function vendor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
