<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomVoipOffer
 *
 * @property int $id
 * @property string $name
 * @property string $provider_job_title
 * @property string $page_description
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer wherePageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomVoipOffer whereProviderJobTitle($value)
 * @mixin \Eloquent
 */
class TelecomVoipOffer extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
