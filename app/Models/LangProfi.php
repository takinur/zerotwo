<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangProfi extends Model
{
    use HasFactory;

    protected $table = 'langproficiency';

    protected $fillable = [
        'id', 
        'name', 
    ];
    
    public $timestamps = false;

    public function Language()
    {
        return $this->belongsTo(LanguageModel::class);
    }
}
