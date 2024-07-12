<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'partnerName',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
