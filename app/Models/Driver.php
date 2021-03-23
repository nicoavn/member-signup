<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function driverDocument()
    {
        return $this->hasOne(DriverDocument::class);
    }
}
