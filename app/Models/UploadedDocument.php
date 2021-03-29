<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UploadedDocument extends Model
{
    public const DOCUMENT_TYPE_TLC_LICENSE = 'tlc_license';
    public const DOCUMENT_TYPE_TLC_INSPECTION = 'tlc_inspection';
    public const DOCUMENT_TYPE_DMV_LICENSE = 'dmv_license';
    public const DOCUMENT_TYPE_CAR_REGISTRATION = 'car_registration';
    public const DOCUMENT_TYPE_PROOF_OF_INSURANCE = 'proof_of_insurance';
    public const DOCUMENT_TYPE_CERTIFICATE_OF_INSURANCE = 'certificate_of_insurance';
}
