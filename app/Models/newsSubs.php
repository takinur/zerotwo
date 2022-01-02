<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsSubs extends Model
{
    use HasFactory;

    protected $table = 'news_subs';

    protected $fillable = ['email'];

    public $timestamps = false;
}
