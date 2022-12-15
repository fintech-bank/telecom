<?php

namespace App\Models\Vente;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Vente\DevisArticle
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
 * @property int $devis_id
 * @property-read \App\Models\Vente\Devis $devis
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle query()
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereArticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereSubtotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereSubtotalRemise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereSubtotalTaxe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DevisArticle whereUnity($value)
 * @mixin \Eloquent
 */
class DevisArticle extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function devis()
    {
        return $this->belongsTo(Devis::class, 'devis_id');
    }
}
