<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function list()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list',$data);
    }

    public function attribute() {
        return view('hello.getAttributeHTML');
    }

    public function editAttribute() {
        return view('hello.editAttributeHTML');
    }
}
