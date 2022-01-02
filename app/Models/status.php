<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $fillable = ['name', ];

    public $timestamps = false;

    public function invitation()
    {
       // return $this->belongsTo(Profile::class);
    }
}
