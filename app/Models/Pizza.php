<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Eloquent Model => the model is equivalent in table in database

/**
 * @method static findOrFail($id)
 */
class Pizza extends Model
{
    use HasFactory;

    // we don't need it because name of class == name of table

    protected $table = 'pizza';
    protected $casts = [
        'toppings' => 'array' /* to cast toppings to array in db*/
    ];

    protected $fillable = [

    ];

    protected $hidden = [
        'name'
    ];


}
