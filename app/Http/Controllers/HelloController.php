<?php

namespace App\Http\Controllers;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        // ９章
        // return 'Hello, world!';

        // １０章
        // return view('index');

        // １１章
        $name= '侍 太郎';
        $languages = ['HTML' , 'CSS', 'JavaScript', 'PHP'];

        throw new Exception('例外が発生しました！');

        return view('index', compact('name' , 'languages'));

    }
}
