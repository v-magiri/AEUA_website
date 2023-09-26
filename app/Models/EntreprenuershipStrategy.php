<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntreprenuershipStrategy extends Model
{
    use HasFactory;

    protected $fillable=[
        'strategy',
        'support_frameworks',
        'entre_proportion',
        'member_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
