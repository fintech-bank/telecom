<?php

namespace App\Models\CRM;

use App\Enums\CustomerStatusEnum;
use App\Enums\CustomerTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customers\Customer
 *
 * @property int $id
 * @property CustomerTypeEnum $type
 * @property string $civilite
 * @property string $nom
 * @property string $prenom
 * @property string|null $societe
 * @property \Illuminate\Support\Carbon|null $date_naissance
 * @property string $dep_naissance
 * @property string|null $ville_naissance
 * @property string $number_contact
 * @property string $adresse
 * @property string|null $comp_adresse
 * @property string $code_postal
 * @property string $ville
 * @property int $tos_communicate
 * @property int $tos_commercial
 * @property CustomerStatusEnum $status
 * @property int|null $customer_fintech_id
 * @property int $user_id
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCivilite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCodePostal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCompAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomerFintechId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDateNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereDepNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereNumberContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereSociete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTosCommercial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTosCommunicate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereVille($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereVilleNaissance($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    protected $dates = ['date_naissance'];

    protected $casts = [
        'status' => CustomerStatusEnum::class,
        'type' => CustomerTypeEnum::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
