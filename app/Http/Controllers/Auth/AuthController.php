<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use \Socialite;
use Auth;

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

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $redirectPath = '/dashboard';
    protected $loginPath = '/auth/login';

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
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
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getSocialAuth()
    {
       return \Socialite::with('facebook')->redirect();
    }


    public function getSocialAuthCallback()
    {
        try {
            $providerData = \Socialite::with('facebook')->user();
        } catch(Exception $e) {
            return redirect('/login/facebook');
        }
        $user = User::where('provider_user_id',$providerData->id)
                    ->where('provider', 'facebook')
                    ->orWhere('email', $providerData->email)
                    ->first();

        if (!$user) {
            $user = User::create([
                'email' => $providerData->email,
                'name' => $providerData->name,
                'provider' => "facebook",
                'provider_user_id' => $providerData->id,
            ]);


        }

        Auth::login($user, true);

        return redirect('/dashboard');
    }

}
