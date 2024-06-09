<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceChangeRequest extends Model
{
    protected $fillable = ['user_id', 'full_name', 'username', 'password'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

