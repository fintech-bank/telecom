<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileMessagerie
 *
 * @property int $id
 * @property string $number
 * @property \Illuminate\Support\Carbon $duration
 * @property string $link_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $mobile_line_id
 * @property-read \App\Models\Mobile\MobileLine $mobile
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereLinkMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereMobileLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileMessagerie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MobileMessagerie extends Model
{
    protected $guarded = [];
    protected $dates = ["created_at", "updated_at", "duration"];

    public function mobile()
    {
        return $this->belongsTo(MobileLine::class, 'mobile_line_id');
    }
}
