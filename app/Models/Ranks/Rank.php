<?php

namespace App\Models\Ranks;

use App\Models\PointOfSales\PointOfSale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rank extends Model
{
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function PointOfSales(): HasMany
    {
        return $this->hasMany(PointOfSale::class);
    }
}
