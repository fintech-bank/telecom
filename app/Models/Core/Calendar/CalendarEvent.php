<?php

namespace App\Models\Core\Calendar;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Calendar\CalendarEvent
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon $start_at
 * @property \Illuminate\Support\Carbon $end_at
 * @property int $daily
 * @property \Illuminate\Support\Carbon $rappel
 * @property string|null $lieu
 * @property int $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereDaily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereRappel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CalendarEvent whereUserId($value)
 * @mixin \Eloquent
 */
class CalendarEvent extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $dates = ['start_at', 'end_at', 'rappel'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
