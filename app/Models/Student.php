<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Student as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student'; // Eloquent will create a student model to store records in the student table
    protected $primaryKey = 'id_student'; // Calling DB contents with primary key
    /**
     * The attributes that are mass assignable.
     **@var array
     */
    protected $fillable = [
        'Nim',
        'Name',
        'Class',
        'Major',
    ];
}
