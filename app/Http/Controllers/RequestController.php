<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(){
        return view('requests.create');
    }

    public function confirm(Request $request){
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_gender = $request->input('user_gender');
        $category = $request->input('category');
        $message = $request->input('message');

        //httpメソッドの取得
        $method = $request->method();
        //pathの取得
        $path = $request->path();
        //URLの取得
        $url = $request->url();
        //ipアドレスの取得
        $ip = $request->ip();

        $variables = [
            'user_name',
            'user_email',
            'user_gender',
            'category',
            'message',
            'method',
            'path',
            'url',
            'ip'
        ];

        return view('requests.confirm', compact($variables));
    }
}
