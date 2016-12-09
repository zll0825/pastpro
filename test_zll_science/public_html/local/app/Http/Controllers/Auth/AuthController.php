<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $username = 'name'; #与password字段配合登陆的字段,name,email,mobile都可以
    protected $redirectPath = '/home'; # 登陆成功后的跳转方向
    protected $redirectAfterLogout = '/'; # 默认退出后跳转页
    protected $loginPath = 'auth/login'; #默认登陆URL

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile'=>$data['mobile'],
            'password' => bcrypt($data['password']),
        ]);
    }

   
    /*
    public function postLogin(){
        if(Auth::check()){
            return redirect('/');
        }
        if(!Auth::attempt(['name'=>$_POST['name'],'password'=>$_POST['password']])){
            return redirect('/');
        }else{
            return redirect('home');
        }
    }

     public function getLogout(){
        return '1';
    }*/
}
