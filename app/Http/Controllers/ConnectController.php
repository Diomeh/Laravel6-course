<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\User;

class ConnectController extends Controller
{

    public function __construct() {
        // Prevent users from accessing guest operations
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin()
    {
    	return view('connect.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8|max:16'
        ];

        $msg = ' no puede estar en blanco.';
        $messages = [
            'email.required' => 'El correo electrónico' . $msg,
            'email.email' => 'El formato de su correo electrónico es inválido.',
            'password.required' => 'La contraseña' . $msg,
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.max' => 'La contraseña no puede tener mas de 16 caracteres.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
            return back()->withErrors($validator)->
                with('message', 'Se ha producido un error.')->
                with('typealert', 'danger');

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ], true))
            return redirect('/');
        else  
            return back()->with('message', 'Su usuario o contraseña son inválidos.')->
                with('typealert', 'danger');
    }

    public function getRegister()
    {
        return view('connect.register');
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:App\User,email',
            'password' => 'required|min:8|max:16',
            'cpassword' => 'required|min:8|max:16|same:password'
        ];

        $msg = ' no puede estar en blanco.';

        $messages = [
            'name.required' => 'El nombre' . $msg,
            'lastname.required' => 'El apellido' . $msg,
            'email.required' => 'El correo electrónico' . $msg,
            'email.email' => 'El formato de su correo electrónico es inválido.',
            'email.unique' => 'Ya existe una cuenta con este correo electrónico',
            'password.required' => 'La contraseña' . $msg,
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.max' => 'La contraseña no puede tener mas de 16 caracteres.',
            'cpassword.required' => 'Por favor repita su contraseña.',
            // 'cpassword.min' => 'La contraseña debe tener al menos 8 caracteres.',
            // 'cpassword.max' => 'La contraseña no puede tener mas de 16 caracteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails())
            return back()->withErrors($validator)->
                with('message', 'Se ha producido un error.')->
                with('typealert', 'danger');

        $user = new User();
        $user->name = e($request->input('name'));
        $user->lastname  = e($request->input('lastname'));
        $user->email  = e($request->input('email'));
        $user->password = Hash::make($request->input('password'));

        if($user->save())
            return redirect('/login');

    	return view('connect.register')->
            with('message', 'Usuario creado correctamente, por favor inicie sesión.')->
            with('typealert', 'success');
    }

    public function getRecover()
    {
    	return view('connect.recover');
    }

    public function postRecover(Request $request)
    {
        
    }

    public function getLogout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

}
