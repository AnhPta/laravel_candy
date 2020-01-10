<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend/index');
    }

    public function registers()
    {
        return view('frontend/register');
    }

    public function postRegisters(Request $request)
    {

        $a = $this->validate($request,[
            'full_name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);



        // Customer::create([
        //     'full_name'=>$request->input('full_name'),
        //     'password'=>bcrypt($request->input('password')),
        //     'email'=>$request->input('email'),
        //     'address'=>$request->input('address'),
        //     'phone'=>$request->input('phone'),
        //     'created_at'=>time(),
        //     'update_at'=>time()
        // ]);
        // return redirect()->route('frontend.index')->with('info','Đăng kí tài khoản thành công !');
    }

    public function cart()
    {
        return view('frontend/cart');
    }
}
