<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Class UploadedDocument
 * @package App\Models
 * @property string document_type
 * @property string filename
 * @property int $driver_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @mixin Model
 */
class UploadedDocument extends Model
{
    public const DOCUMENT_TYPE_TLC_LICENSE = 'tlc_license';
    public const DOCUMENT_TYPE_TLC_INSPECTION = 'tlc_inspection';
    public const DOCUMENT_TYPE_DMV_LICENSE = 'dmv_license';
    public const DOCUMENT_TYPE_CAR_REGISTRATION = 'car_registration';
    public const DOCUMENT_TYPE_PROOF_OF_INSURANCE = 'proof_of_insurance';
    public const DOCUMENT_TYPE_CERTIFICATE_OF_INSURANCE = 'certificate_of_insurance';

    public const DOCUMENT_TYPES_ES = [
        self::DOCUMENT_TYPE_TLC_LICENSE => 'TLC License',
        self::DOCUMENT_TYPE_TLC_INSPECTION => 'TLC Inspection',
        self::DOCUMENT_TYPE_DMV_LICENSE => 'DMV License',
        self::DOCUMENT_TYPE_CAR_REGISTRATION => 'Car Registration',
        self::DOCUMENT_TYPE_PROOF_OF_INSURANCE => 'Proof of Insurance',
        self::DOCUMENT_TYPE_CERTIFICATE_OF_INSURANCE => 'Certificate of Insurance',
    ];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }
}
