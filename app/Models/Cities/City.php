<?php

namespace App\Models\Cities;

use App\Models\Countries\Country;
use App\Models\Users\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $name
 * @property mixed $country_id
 * @property bool|mixed $status
 * @method static where(string $string, mixed $id)
 */
class City extends Model
{
    protected $fillable =
        [
            'name',
            'country_id',
            'status',
        ];

    /**
     * @return BelongsTo
     */
    public function Country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return HasMany
     */
    public function Users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
