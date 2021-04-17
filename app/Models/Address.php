<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Class Address
 * @package App\Models
 *
 * @property string $street_address
 * @property string $apt_unit
 * @property string $city
 * @property string $state
 * @property string $zip_code
 * @property int $driver_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Model
 */
class Address extends Model
{
    protected $fillable = [
        'driver_id',
        'street_address',
        'apt_unit',
        'city',
        'state',
        'zip_code',
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
