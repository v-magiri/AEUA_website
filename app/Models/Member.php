<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leader;
use App\Models\ContactPerson;
use App\Models\EntreprenuershipStrategy;

class Member extends Model
{
    use HasFactory;
    protected $table="tbl_members";
    protected $fillable=[
        'year_founded',
        'university_name',
        'number_of_schools',
        'number_of_students',
        'number_of_lecturers',
        'country',
        'city',
        'website',
        'university_email',
        'address',
        'createdBy',
    ];


    public function contactPeople()
    {
        return $this->hasMany(ContactPerson::class);
    }

    public function leader()
    {
        return $this->hasOne(Leader::class);
    }

    public function entreprenuershipStrategy()
    {
        return $this->hasOne(EntreprenuershipStrategy::class);
    }
}
