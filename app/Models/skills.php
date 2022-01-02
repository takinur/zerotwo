<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $fillable = ['name', 'profile_id', 'level'];

    public $timestamps = false;

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
