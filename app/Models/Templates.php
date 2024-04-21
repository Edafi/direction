<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    protected $conection = 'mariadb';
    protected $table = 'templates';
    protected $primary_key = 'id';
    public $timestamps = false;
    protected $fillable =[
        'group_id',
        'name' => 'GOOGOOZAZA',
        'decanat_check' => 0,
        'comment',
        'date'
    ];
}
