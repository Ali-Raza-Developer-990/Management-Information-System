<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkinout extends Model
{
    use HasFactory;

    protected $table = "checkin_checkout";

    protected $fillable = [
        'user_id',
        'checkin_time',
        'checkout_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
