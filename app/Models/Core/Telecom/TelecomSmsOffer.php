<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomSmsOffer
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string $provider_job_title
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomSmsOffer whereProviderJobTitle($value)
 * @mixin \Eloquent
 */
class TelecomSmsOffer extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
