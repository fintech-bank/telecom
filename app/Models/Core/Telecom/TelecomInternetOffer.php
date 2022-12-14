<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomInternetOffer
 *
 * @property int $id
 * @property string $name
 * @property string|null $synopsis
 * @property string $provider_job_title
 * @property float $price
 * @property int $engage
 * @property int $engage_duration en mois
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereEngage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereEngageDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereProviderJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomInternetOffer whereSynopsis($value)
 * @mixin \Eloquent
 */
class TelecomInternetOffer extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
