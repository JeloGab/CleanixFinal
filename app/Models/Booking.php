<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        "customer_id",
        "first_name",
        "last_name",
        "phone_number",
        "email",
        "address",
        "booking_date",
        "booking_time",
        "service",
        "comment",
    ];
}
