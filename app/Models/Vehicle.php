<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Class Vehicle
 * @package App\Models
 *
 * @property string make
 * @property string model
 * @property string color
 * @property string year
 * @property string plate_number
 * @property string vin
 * @property string diamond
 * @property string base_number_name
 * @property string tablet_no
 * @property string insurance_certificate_provided
 * @property string nys_registration
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Model
 */
class Vehicle extends Model
{
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
