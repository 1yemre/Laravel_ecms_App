<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    protected $table='course';
    public $timestamps = false;
   protected $fillable=['course_title','course_content'];//izin verdiklerimiz 
    //protected $guarded=["course_must"];//korduklarımız
} 
