<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120228,
            'Name' => 'Vinanti Maulidya Fazri',
            'Phone' => '083862348934',
            'Class' => 'XII RPL 7',
        ];
    }
}
