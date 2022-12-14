<?php

namespace App\Models\Vente;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vente\OrderArticle
 *
 * @property int $id
 * @property string $article
 * @property string|null $description
 * @property int|null $quantity
 * @property string $unity
 * @property float|null $subtotal_price
 * @property float $subtotal_taxe
 * @property float $subtotal_remise
 * @property float|null $total_price
 * @property int $order_id
 * @property-read \App\Models\Vente\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereSubtotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereSubtotalRemise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereSubtotalTaxe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderArticle whereUnity($value)
 * @mixin \Eloquent
 */
class OrderArticle extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
