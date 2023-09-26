<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $table="tbl_leaders";

    protected $fillable=[
        'title',
        'name',
        'year_appointed',
        'member_id'
    ];
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
