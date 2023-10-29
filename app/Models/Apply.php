<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applies'; // Specify the table name

    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'high_school_certificate',
        'age',
        'nationalID',
        'bio',
        'department_id',
        'user_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function users(){
    return $this->hasMany(User::class);
}

}
