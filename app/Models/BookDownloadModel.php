<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDownloadModel extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','country','region','city'];
}
