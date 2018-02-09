<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

//    public function showLoginForm()
//    {
//        $data = ['title' => 'Administrator Login'];
//        return view('default.admin.login',$data);
//    }


    public function __construct()
    {
        $this->middleware('adminRedirect')->except('logout');
    }
//    public function logged() {
//
//        if(!Auth::check()) return redirect('admin/login');;
//    }


//    public function login(Request $request)
//    {
//        if(views()->exists('main.admin.login')) {
//            $data = ['title' => 'Administrator Login'];
//
//            return views('main.admin.login',$data);
//        } else {
//            abort('404');
//        }
//
//        $auth = Auth::attempt(array(
//            'email' => $request->input('login'),
//            'password' => $request->input('password')
////            'admin_role' => config('settings.admin')
//        ));
//        dd($request->input('login'));
//
//        if(!$auth) {
//            return redirect('admin/login');
//        }
//
//        return redirect('admin');
//    }
}
