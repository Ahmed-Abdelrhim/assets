<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public $table = 'languages';

    protected $fillable = ['iso','active','created_at' , 'updated_at'];
}
