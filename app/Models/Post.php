<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Post extends Model
{
    use HasFactory;
    protected $table="student";
    protected $fillable = [
        'name',
        'description',
    ];
}
