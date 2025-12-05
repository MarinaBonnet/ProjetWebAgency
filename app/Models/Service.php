<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Autoriser l’insertion en masse (mass assignment)
    protected $fillable = ['title', 'description', 'price'];
}
