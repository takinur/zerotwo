<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';

    protected $fillable = [
        'company_name',
        'job_title',
        'profile_id',         
        'start_date', 
        'end_date',
        'is_current_job',
        
        
    ];
    
    public $timestamps = false;

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
