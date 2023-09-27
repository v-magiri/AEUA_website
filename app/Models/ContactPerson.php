<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;
    protected $table='tbl_contact_people';
    protected $fillable=[
        'name',
        'position',
        'title',
        'member_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
