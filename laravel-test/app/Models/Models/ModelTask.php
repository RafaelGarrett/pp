<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTask extends Model
{
    protected $table='tasks';

    protected $fillable = ['title','description','completed'];

    use HasFactory;
}
