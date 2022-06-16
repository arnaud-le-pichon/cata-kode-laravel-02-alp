<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = "meetings";

    public $primaryKey = "id";

    protected $fillable = [
        'user',
        'phone',
        'email',
        'time',
        'message'
    ];

    protected $casts = [
        'time' => 'date:m-d-Y'
    ];
}
