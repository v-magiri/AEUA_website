<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    use HasFactory;
    protected $table="tbl_concerns";
    protected $fillable=[
        'email',
        'name',
        'subject',
        'message',
    ];
}
