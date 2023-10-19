<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        $quizzes = [
            ['name' => 'Quiz 1', 'photo' => 'https://example.com/image1.jpg', 'status' => 'active'],
            ['name' => 'Quiz 2', 'photo' => 'https://example.com/image2.jpg', 'status' => 'inactive'],
        ];

        return view('home', compact('quizzes'));
    }
}
