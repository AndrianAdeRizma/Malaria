<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $data=[
            'title'=> 'Example',
        ];
        return view('example', $data);
    }

    public function pasien()
    {
        $data=[
            'title'=> 'Example',
        ];
        return view('pasien.index', $data);
    }
}
