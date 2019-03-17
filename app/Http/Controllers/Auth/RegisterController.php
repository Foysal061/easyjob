<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create()
    {
        return view('my-account');
    }


   /* public function store(Request $request)
    {
        $this->validate(request(), [
            'username2' => 'required',
            'email2' => 'required|email2',
            'password1' => 'required'
        ]);
        
        $user = User::create(request(['username2', 'email2', 'password1']));
        
        auth()->login($user);
        
        return redirect()->to('/my-account');
    }*/

    public function store(Request $request)
    {
        $this->validate(request(), [
            'username2' => 'required',
            'email2' => 'required|email',
            'password1' => 'required'
        ]);
        $username = $request->input('username2');
        $email = $request->input('email2');

        //dd($email);

        $emailifexist=User::where('email',$email)->first();

        if(isset($emailifexist))
        {
            $messege="Email address already exist. Please try with another email address.";
            return view('my-account',compact('messege'));
        }
        $password = $request->input('password1');

        $repeatpassword = $request->input('password2');

        if($password != $repeatpassword)
        {
            $errorpassword="Password dosen't match.";
            return view('my-account',compact('errorpassword'));
        }

        
      
        $user = User::create([
            'name'=> $username,
            'email'=> $email,
            'password'=> bcrypt($password)

        ]);

        
        

        auth()->login($user);
       // $user->save();
        return view('index');
        
    }

}
