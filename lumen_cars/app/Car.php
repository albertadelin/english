<?php

namespace App;


class Car extends Model
{
    public $timestamps = false;
    

    public function clients(){

        return $this->hasMany(Client::class, 'car_id');

    }
}
