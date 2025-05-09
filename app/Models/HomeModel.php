<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\notifications\notifiable;

class HomeModel extends Model
{
    use HasFactory,notifiable;

    protected $fillable = ["Name","Age","Skills","Desgination","Address"];

    protected $table="students";
}
