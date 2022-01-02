<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employer';

    protected $fillable = [
        'user_id',
        'company_name',
        'company_website',
        'subscription_id',
    ];


    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subtype()
    {
        return $this->belongsTo(SubType::class);
    }
}
