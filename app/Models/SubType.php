<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubType extends Model
{
    use HasFactory;

    protected $table = 'subscription';

    protected $fillable = [
        'type',
        'price',

    ];


    public $timestamps = false;

    public function employer()
    {
        return $this->hasOne(Employer::class);
    }
}
