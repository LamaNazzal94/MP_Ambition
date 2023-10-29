<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'colleges'; // Specify the table name

    use HasFactory;
    protected $fillable = [
        'name',
       'image',
        'uni_id'

    ];
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function departm(){
    return $this->hasMany(Department::class);
}
}
