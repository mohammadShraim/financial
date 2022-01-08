<?php

namespace App\Models\Cards;

use App\Models\PointOfSales\PointOfSale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    protected $fillable = [
        'serial',
        'type',
        'status',
        'price',
        'point_of_sale_id',
        'refund',
        'old_id',
    ];

    /**
     * @return BelongsTo
     */
    public function PointOfSale(): BelongsTo
    {
        return $this->belongsTo(PointOfSale::class);
    }
}
