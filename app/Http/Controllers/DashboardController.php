<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static $data = [];
    public function __construct()
    {
        self::$data['title'] = 'Store';
    }

    public function index()
    {
        return view('dashboard',[
            'user'  =>  'Bahaa Mohammed',
            'title' =>  self::$data['title']
        ]);
    }
}
