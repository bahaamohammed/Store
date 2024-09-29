<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static $data = [];
    public function __construct()
    {
        self::$data['app_name'] = 'Store';
    }

    public function index()
    {
        self::$data['title'] = 'Dashboard';
        return view('dashboard.index',[
            'user'  =>  'Bahaa Mohammed',
            'app_name' =>  self::$data['app_name'],
            'title' =>  self::$data['title']
        ]);
    }
}
