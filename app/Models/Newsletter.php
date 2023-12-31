<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Newsletter extends Model
{
    use HasFactory;
    protected $table="tbl_newsletters";
    protected $fillable = [
        'title',
        'issued_by',
        'issued_on',
        'document_path'
    ];
}
