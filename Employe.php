<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Number;
class Employe extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    //set methods() when we will put data in the db these methods will format data

    // public function setNameAttribute($value) {
    //     $this->attributes['name'] = strtolower($value);//it converts the name into lower case when entered in the db
    // }

      public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);//it converts the email into lower case when entered in the db
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);//it converts the password into hash in db //
    }

//all of the changer that we do with get methods will not affect anything in the db

    //get methods when the data will be displayed they will format data

    public function getNameAttribute($value){
        return ucwords($value);//converts the first letter of every word into the capital letter 
    }

    public function getSalaryAttribute($value){
        // return Number::currency($value,in:'EUR');

        return '$' . number_format($value, 1);
        // $ sign to represent currency and then number format(which is our value,the how many zeros you want after .(decimal)) 
    }

}
