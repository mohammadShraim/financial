<?php

namespace App\Models\Countries;

use App\Models\Cities\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $code
 * @property bool|mixed $status
 */
class Country extends Model
{
    protected $fillable =
        [
            'name',
            'coed',
            'status',
        ];

    /**
     * @return HasMany
     */
    public function Cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
