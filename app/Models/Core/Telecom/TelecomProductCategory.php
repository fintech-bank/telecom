<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomProductCategory
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomProductCategory whereName($value)
 * @mixin \Eloquent
 */
class TelecomProductCategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
