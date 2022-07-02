<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street_address',
        'street_address_line2',
        'city',
        'state',
        'postal',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
