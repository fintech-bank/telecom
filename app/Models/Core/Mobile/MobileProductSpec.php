<?php

namespace App\Models\Core\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Core\Mobile\MobileProductSpec
 *
 * @property int $id
 * @property int $nb_sim_port
 * @property string $sim_port_support
 * @property string $memoire
 * @property string $processor
 * @property string $os
 * @property string $weight
 * @property int $res_water
 * @property int $res_shock
 * @property int $res_dust
 * @property int $wifisix
 * @property int $5GBand
 * @property int $4GBand
 * @property int $3GBand
 * @property int $nfc
 * @property int $screen_hdr
 * @property string|null $screen_res
 * @property string|null $screen_tall
 * @property string|null $screen_type
 * @property string|null $photo_front
 * @property string|null $photo_rear
 * @property int $mobile_product_id
 * @property-read \App\Models\Core\Mobile\MobileProduct $product
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec where3GBand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec where4GBand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec where5GBand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereMemoire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereMobileProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereNbSimPort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereNfc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec wherePhotoFront($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec wherePhotoRear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereProcessor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereResDust($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereResShock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereResWater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereScreenHdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereScreenRes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereScreenTall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereScreenType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereSimPortSupport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileProductSpec whereWifisix($value)
 * @mixin \Eloquent
 */
class MobileProductSpec extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(MobileProduct::class, 'mobile_product_id');
    }
}
