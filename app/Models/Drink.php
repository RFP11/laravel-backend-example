<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;

    protected $table = 'drink';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'price', 'description', 'image'];

    //for sensitive data
    // protected $hidden = ['image'];
}
