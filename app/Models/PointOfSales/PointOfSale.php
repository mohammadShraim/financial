<?php

namespace App\Models\PointOfSales;

use App\Models\Ranks\Rank;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PointOfSale extends Model
{
    protected $fillable = [
        'name',
        'location',
        'lat',
        'lng',
        'status',
        'logo',
        'rank_id'
    ];

    /**
     * @return BelongsTo
     */
    public function Rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }

    /**
     * @return HasMany
     */
    public function Users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
