<?php

namespace App\Models\CRM;

use App\Enums\AddressTypeEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CRM\Address
 *
 * @property int $id
 * @property AddressTypeEnum $type
 * @property string $name
 * @property string $address
 * @property string $addressbis
 * @property string $ville
 * @property string $city
 * @property string $country
 * @property int $customer_id
 * @property-read \App\Models\CRM\Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressbis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereVille($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'type' => AddressTypeEnum::class
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
