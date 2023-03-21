<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageUploadRequest;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fullname'=>['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       dump($data);
        $date_input = strtotime($data['birthdate']);

        //$filename    = $data['photo']->getClientOriginalName();
        $filename =time().'.'.$data['photo']->extension();
        dump($filename);
        //Сохраняем оригинальную картинку
        $data['photo']->move(public_path('image/user_profiles/'),$filename);

        //Создаем миниатюру изображения и сохраняем ее
        //$thumbnail = Image::make(Storage::path('/public/image/user_profiles/').'origin/'.$filename);
        //$thumbnail->fit(300, 300);
        //$thumbnail->save(Storage::path('/public/image/news/').'thumbnail/'.$filename);

        //Сохраняем новость в БД
        $data['photo'] = public_path('image/user_profiles/').$filename;
        //dd($data['photo']);


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'fullname'=>$data['fullname'],
            'birthdate'=> date("Y-m-d",$date_input),
            'photo'=>$data['photo'],
        ]);
    }
}
