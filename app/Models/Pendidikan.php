<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='pendidikan';
    protected $fillable = [
        'keterangan',
    ];

}
