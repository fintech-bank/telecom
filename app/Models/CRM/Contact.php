<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CRM\Contact
 *
 * @property int $id
 * @property string $civility
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property int $customer_id
 * @property-read \App\Models\CRM\Customer $customer
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCivility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePrenom($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
