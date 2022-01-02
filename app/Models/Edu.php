<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edu extends Model
{
    use HasFactory;
    protected $table = 'educations';

    protected $fillable = [
        'institution',
        'profile_id', 
        'study_area', 
        'degree', 
        'attend_date', 
        'complete_date'
    ];
    
    public $timestamps = false;

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
