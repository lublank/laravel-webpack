<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    // index 页面
    public function getIndexPage() {
        return view('index', [
            'page_title' => 'Welcome to Laravel, Hell world!',
        ]);
    }
}
