<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van A',
            'age' => 20,
            'school' => 'Đại học CNTT'
        ];
        
        return view('welcome', compact('data'));
    }
    public function multiplication($n)
    {
        // Kiểm tra xem $n có phải là số hay không
        $isNumber = is_numeric($n);
        
        return view('bang-cuu-chuong', compact('n', 'isNumber'));
    }
}