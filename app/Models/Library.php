<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable = [
        'auther_name',
        'book_name',
        'number_of_page',
        'published',
    ];
    public static function rulse()
    {
        return [
            'auther_name' => 'required|min:3|max:23|unique:libraries,auther_name',
            'book_name' => 'required|min:3|max:23',
            'number_of_page' => 'required|integer',
            'published' => 'required',
               ];
    }
}
