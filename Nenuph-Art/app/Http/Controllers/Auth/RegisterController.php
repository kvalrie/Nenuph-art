<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telephone' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'postal' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country_id' => 'required|string|max:255',
            'delivery_first_name' => 'required|string|max:255',
            'delivery_last_name' => 'required|string|max:255',
            'delivery_adress' => 'required|string|max:255',
            'delivery_postal' => 'required|string|max:255',
            'delivery_city' => 'required|string|max:255',
            'delivery_country_id' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_legal_form' => 'required|string|max:255',
            'company_vat' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'telephone' => $data['telephone'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'adress' => $data['adress'],
            'postal' => $data['postal'],
            'city' => $data['city'],
            'country_id' => $data['country_id'],
            'delivery_first_name' => $data['delivery_first_name'],
            'delivery_last_name' => $data['delivery_last_name'],
            'delivery_adress' => $data['delivery_adress'],
            'delivery_postal' => $data['delivery_postal'],
            'delivery_city' => $data['delivery_city'],
            'delivery_country_id' => $data['delivery_country_id'],
            'company_name' => $data['company_name'],
            'company_legal_form' => $data['company_legal_form'],
            'company_vat' => $data['company_vat'],
        ]);
    }
}
