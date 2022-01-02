<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socials extends Model
{
    use HasFactory;
    
    protected $table = 'socials';

    protected $fillable = ['name', 'profile_id', 'link'];

    public $timestamps = false;

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
