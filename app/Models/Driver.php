<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * Class Driver
 * @package App\Models
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $social_security_no
 * @property string $desired_number
 * @property string $agreed_accept_terms
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $emergency_contact_name
 * @property string $emergency_contact_phone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Model
 */
class Driver extends Model
{
    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }

    public function driverDocument(): HasOne
    {
        return $this->hasOne(DriverDocument::class);
    }

    public function uploadedDocuments(): HasMany
    {
        return $this->hasMany(UploadedDocument::class);
    }
}
