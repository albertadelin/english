<?php

namespace App;


class Client extends Model
{
    public $timestamps = false;
    

    public function cars(){

        return $this->belongsTo(Car::class, 'car_id');

    }
}
