<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomServicePrice
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomServicePrice wherePrice($value)
 * @mixin \Eloquent
 */
class TelecomServicePrice extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
