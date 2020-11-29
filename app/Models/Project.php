<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // table name
    protected $table = 'projects';

    // without asignacion masiva
    protected $guarded = [];
}
