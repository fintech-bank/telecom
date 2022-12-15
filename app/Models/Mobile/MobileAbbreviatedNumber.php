<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileAbbreviatedNumber
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property string $abbreviate
 * @property int $mobile_line_id
 * @property-read \App\Models\Mobile\MobileLine $mobile
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber whereAbbreviate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber whereMobileLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileAbbreviatedNumber whereNumber($value)
 * @mixin \Eloquent
 */
class MobileAbbreviatedNumber extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function mobile()
    {
        return $this->belongsTo(MobileLine::class, 'mobile_line_id');
    }
}
