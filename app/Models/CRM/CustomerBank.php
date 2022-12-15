<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CRM\CustomerBank
 *
 * @property int $id
 * @property string $bankname
 * @property string $iban
 * @property string $bic
 * @property int $customer_id
 * @property-read \App\Models\CRM\Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank whereBankname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank whereBic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank whereIban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerBank whereId($value)
 * @mixin \Eloquent
 */
class CustomerBank extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
