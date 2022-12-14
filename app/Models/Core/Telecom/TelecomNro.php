<?php

namespace App\Models\Core\Telecom;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Telecom\TelecomNro
 *
 * @property int $id
 * @property string|null $id_ref
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $operator
 * @property string|null $name
 * @property string|null $ref-FR-PTT
 * @property string|null $ref-FR-Orange
 * @property string|null $street_cabinet
 * @property string|null $description
 * @property string|null $osm_timestamp
 * @property string $status
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro query()
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereIdRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereOperator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereOsmTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereRefFROrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereRefFRPTT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TelecomNro whereStreetCabinet($value)
 * @mixin \Eloquent
 */
class TelecomNro extends Model
{
    protected $guarded = [];
    public $timestamps = false;
}
