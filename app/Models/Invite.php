<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $table = 'invitation';

    protected $fillable = ['employer_id', 'candidate_id', 'status_id'];

    public $timestamps = true;

    public function status()
    {
        return $this->belongsTo(status::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Profile::class);
    }
}
