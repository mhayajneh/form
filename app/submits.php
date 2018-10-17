<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submits extends Model
{
    protected $table = 'submits';
    protected $fillable = ['name','dob','number','major','carType','address','email'];
    protected $primaryKey = 'submitID';


    public static function store($request)
    {
        $submits = new submits;
        $submits->name = $request['name'];
        $submits->dob = $request['dateOfBirth'];
        $submits->number = $request['number'];
        $submits->major = $request['major'];
        $submits->carType = $request['carType'];
        $submits->address = $request['address'];
        $submits->email = $request['email'];
        $submits->save();
    }
}
