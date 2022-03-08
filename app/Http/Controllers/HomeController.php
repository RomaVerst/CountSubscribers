<?php

namespace App\Http\Controllers;

use App\Models\Subscrubers;

class HomeController extends Controller
{
    public function index() {
        return view('main_templ', [
            'title' => 'Welcome',
            'h1' => 'Количество подписчиков Михаила Галустяна',
            'content' => Subscrubers::getCount()
        ]);
    }
}
