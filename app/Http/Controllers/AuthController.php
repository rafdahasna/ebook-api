<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119149,
            "Name" => "Rafda Hasna Imamah",
            "Gender" => "Female",
            "Phone" => 6281226045779,
            "Class" => "XII RPL 5"
        ];
    }

}