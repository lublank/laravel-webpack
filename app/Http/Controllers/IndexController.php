<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    //
    public function getIndexPage() {
        return view('index', [
            'page_title' => 'Welcome to Laravel, Hell world!',
        ]);
    }
}
