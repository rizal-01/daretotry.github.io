<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Dare to try | Home'
        ]);
    }

    public function gbr()
    {
        return view('class_inggris', [
            'title' => 'Dare to try | Kelas Inggris'
        ]);
    }

    public function jpn()
    {
        return view('class_japan', [
            'title' => 'Dare to try | Kelas Jepang'
        ]);
    }

    public function kor()
    {
        return view('class_korea', [
            'title' => 'Dare to try | Kelas Korea'
        ]);
    }

    public function course()
    {
        return view('mini_course', [
            'title' => 'Dare to try | Mini Course'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'Dare to try | About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Dare to try | Contact'
        ]);
    }

    public function faq()
    {
        return view('faq', [
            'title' => 'Dare to try | FAQ'
        ]);
    }
}
