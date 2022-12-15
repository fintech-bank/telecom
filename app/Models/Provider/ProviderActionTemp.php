<?php

namespace App\Models\Provider;

use App\Models\Vente\Devis;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Provider\ProviderActionTemp
 *
 * @property int $id
 * @property string $provider_job_title
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $devis_id
 * @property-read Devis $devis
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereProviderJobTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProviderActionTemp whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProviderActionTemp extends Model
{
    protected $guarded = [];

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }
}
