<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments'; // Specify the table name

    use HasFactory;
    protected $fillable = [
        'name',
       'image',
        'introduction',
        'apportunities',
        'cost',
        'duration_study',
        'college_id'
    ];
    public function college()
    {
        return $this->belongsTo(College::class);
    }
//     public function applay(){
//     return $this->hasMany(Applay::class);
// }
}
