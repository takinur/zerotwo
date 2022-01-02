<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';

    protected $fillable = [
        'username',
        'image_path',
        'phone',
        'address',
        'profession',
        'description',
        'user_id',
    ];


    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function skills()
    {
        return $this->hasMany(skills::class);
    } 

    public function Edu()
    {
        return $this->hasMany(Edu::class);
    } 
    public function Experience()
    {
        return $this->hasMany(Experience::class);
    } 
    public function Languages()
    {
        return $this->hasMany(LanguageModel::class);
    } 
    public function Socials()
    {
        return $this->hasMany(Socials::class);
    } 
}
