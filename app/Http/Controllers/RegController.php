<?php

namespace App\Http\Controllers;

use App\list_pages;
use App\User;
use App\user_clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function regis()
    {
        return view('reg.regis');
    }

    public function storeaddClient(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required | email',
                'address' => 'required',
                'city' => 'required',
                'username' => 'required',
                'password' => 'required | min :8',
                'is_admin' => 'required',
            ],
            [
                'required' => 'Vui lòng nhập :attribute!',
                'email' => ':attribute không đúng định dạng!',
                'min' => 'Vui lòng nhập lại :attribute có độ dài ít nhất 8 kí tự!'
            ],
            [
                'fullname' => 'tên',
                'gender' => 'giới tính',
                'phone' => 'điện thoại',
                'email' => 'email',
                'address' => 'địa chỉ',
                'city' => 'tỉnh/thành phố',
                'username' => 'tên đăng nhập',
                'password' => 'mật khẩu',
                'is_admin' => 'điều khoản',
            ]
        );
        user_clients::create([
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'username' => $request->username,
            'is_admin' => $request->is_admin,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/regis')->with('status', 'Thông tin quý khách đã được ghi nhận. Cảm ơn quý khách!');
    }

    public function customerIf(){
        $list_page = list_pages::all();
        return view('reg.regis',compact('list_page'));
    }

    public function login(Request $request)
    {
        request()->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'required' => 'Vui lòng nhập :attribute!',
                'min' => ':attribute có độ dài ít nhất 5 kí tự!'
            ],
            [
                'email' => 'tên đăng nhập',
                'password' => 'mật khẩu',
            ]
        );

        $arr = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($arr)){
            ?>
            <div class="alert alert-success d-none" id="msg_div">Đăng nhập thành công!</div>
            <?php
        }else{
            ?>
            <p class="form-text text-danger" style="font-weight: bold; font-size: 12px">
                                            Email hoặc mật khẩu không chính xác!</p>
            <?php
        }
    }
}
