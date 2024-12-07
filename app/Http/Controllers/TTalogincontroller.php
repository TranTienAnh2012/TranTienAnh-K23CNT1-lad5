<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TTalogincontroller extends Controller
{
    //
    public function ttaindex() {
        return view('tta-login');
    }
    //action khi người dùng submit form login 
    public function ttaSubmit(Request $request){
        //lấy toàn bộ dữ liệu trên form
        $res=$request->all();
        return $res;

        // validationForm
        // $validation = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|max:12'
        // ]);

        // lấy gia trị trên form 
        // Nhận về dữ liệu input trên form 
        // $email = $request->input('email');
        // $password = $request->input('password');
        // return '<h1> Xin chao, '. $email;

        // return redirect('/'); // sau khi nhận submit sẽ chuyển về trang welcome
    }


    // public function loginSumit
}
