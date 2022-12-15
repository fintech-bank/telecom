<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mobile\MobileLineOption
 *
 * @property int $id
 * @property int $annuaire
 * @property int $surtaxe_number
 * @property int $mail_invoice
 * @property int $mail_invoice_number
 * @property int $block_plan
 * @property int $gplay_invoice
 * @property int $four_lte
 * @property int $five_lte
 * @property int $ipvsix
 * @property int $mobile_line_id
 * @property-read \App\Models\Mobile\MobileLine $mobile
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereAnnuaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereBlockPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereFiveLte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereFourLte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereGplayInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereIpvsix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereMailInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereMailInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereMobileLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MobileLineOption whereSurtaxeNumber($value)
 * @mixin \Eloquent
 */
class MobileLineOption extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function mobile()
    {
        return $this->belongsTo(MobileLine::class, 'mobile_line_id');
    }
}
