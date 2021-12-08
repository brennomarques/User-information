<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    static function userInformation(){
        $user = array(
            "name" => "Felipe ramos santos",
            "age" => "29",
        );
        return $user;
    }
}
