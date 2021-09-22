<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => 3103119119,
            'Name' => 'Muhammad Harris',
            'Gender' => 'Male',
            'Phone' => '081548561958',
            'Class' => 'XII RPL 5'
        ];
    }
}
