<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'main_image',
        'image1',
        'image2',
        'image3',
        'accommodation',
        'offer',
        'ranking',
        'about',
        'requirement',
        'cost',
        'location',
        'country_id',
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function colleges(){
    return $this->hasMany(College::class);
}
}
