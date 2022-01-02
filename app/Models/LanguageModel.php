<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageModel extends Model
{
    use HasFactory;
    
    protected $table = 'language';

    protected $fillable = [
        'name', 
        'profile_id',
        'proficiency_id', 
    ];
    
    public $timestamps = false;

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function proficiency()
    {
        return $this->hasMany(LangProfi::class);
    }
}
