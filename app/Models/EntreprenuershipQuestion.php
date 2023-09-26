<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreprenuershipQuestion extends Model
{
    use HasFactory;
    protected $fillable=[
        'email',
        'name',
        'address',
        'ideaDescription'
    ];
}
