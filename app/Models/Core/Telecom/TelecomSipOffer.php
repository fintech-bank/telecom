<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomSipOffer
 *
 * @property int $id
 * @property int $nb_canal
 * @property string $provider_job_title
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer whereNbCanal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSipOffer whereProviderJobTitle($value)
 * @mixin \Eloquent
 */
class TelecomSipOffer extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
