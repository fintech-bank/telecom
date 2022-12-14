<?php

namespace App\Models\Abonnement;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Abonnement\AbonnementService
 *
 * @property int $id
 * @property string $provider internet,voip, mobile, sip, sms
 * @property int $provider_id
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService query()
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AbonnementService whereProviderId($value)
 * @mixin \Eloquent
 */
class AbonnementService extends Model
{
}
