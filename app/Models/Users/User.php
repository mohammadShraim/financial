<?php

namespace App\Models\Users;

use App\Models\Cities\City;
use App\Models\PointOfSales\PointOfSale;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method create(array $array)
 */
class User extends Authenticatable
{
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'otp',
        'verified',
        'status',
        'role',
        'point_of_sale_id',
        'city_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * @return BelongsTo
     */
    public function PointOfSale(): BelongsTo
    {
        return $this->belongsTo(PointOfSale::class);
    }

    /**
     * @return BelongsTo
     */
    public function City(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
