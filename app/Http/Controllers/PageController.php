<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function product() {
        $product = ['Python', 'Java', 'C++', 'C#', 'PHP'];
        return view('product', ['product' => $product]);
    }
    
    public function news($id) {
        return view('news', ['id' => $id]);
    }
    
    public function program() {
        $program = ['Cyber Security', 'Web Development', 'Mobile Development', 'Game Development', 'UI/UX Design'];
        return view('program', ['program' => $program]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

}
?>