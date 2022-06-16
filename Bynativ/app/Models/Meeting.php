<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Meeting extends Model
{
    protected $table = "meetings";

    public $primaryKey = "id";

    protected $fillable = [
        'user',
        'phone',
        'email',
        'time',
        'message',
        'timezone'
    ];

    public function getTimeAttribute($value)
    {
        return Carbon::parse($value, 'UTC')->setTimezone($this->timezone);
    }
}
