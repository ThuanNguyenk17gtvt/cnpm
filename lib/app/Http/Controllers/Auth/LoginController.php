<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

     // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        return view('fontend.login');
    }
    public function postLogin(Request $request){

        $rules = [
        'name_id' =>'required',
        'password' => 'required|min:8'
        ];
        $messages = [
            'name_id.required' => 'Name_id là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }
        else {

            $arr=['name_id'=> $request ->name_id,'password'=>$request ->password];
            if($request->remember=='remember'){
                $remember=true;
            }else{
                $remember=false; 
            }
            if (Auth::attempt($arr)) {
                if (Auth::check()) {
                     if (Auth::user()->level==2) {
                        // return view('admin.index',['user'=>Auth::user()]);
                        return redirect()->intended('admin/home');
                    }
                    else if (Auth::user()->level==3) 
                    {
                        // return view('fontend.home',['user'=>Auth::user()]);
                        return redirect()->intended('home',['user'=>Auth::user()]);
                    }
                }
            }
            else{
                
                return back()->withInput()->with('error','Tài khản hoặc mật khẩu chưa đúng');
            }
        }
    }
}
