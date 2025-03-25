<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'title', 
        'slug', 
        'body', 
        'image', 
        'published_at', 
        'author_id'
    ];