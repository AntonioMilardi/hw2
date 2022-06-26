<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends BaseController
{

  public function register_form() {


    if(Session:: get('username')) {

        return redirect('Home');

    }
    $error = Session::get('error');
    Session::forget('error');
     return view('register')->with('error', $error);

  }

  public function do_register_form() 
  {
    if(Session:: get('username')) {

      return redirect('Home');

  }
      //validare i dati
      if(strlen(request('username')) == 0 || strlen(request('password')) == 0
      || strlen(request('nome')) == 0 || strlen(request('cognome')) == 0) 
      {
        Session::put('error', 'campo_vuoto');
        return redirect('register')->withInput();

      }

      else if (User::where('username', request('username'))->first())
      {

        Session::put('error', 'esistente');
        return redirect('register')->withInput();

      }

      else if (strlen(request('password')) < 8) {

        Session::put('error', 'corta');
        return redirect('register')->withInput();

      }
      //creare l'utente

      $user = new User;
      $user->nome = request('nome');
      $user->cognome = request('cognome');
      $user->username = request('username');
      $user->Password = password_hash(request('password'), PASSWORD_BCRYPT);
     
      $user->save();

      //login
        Session::put('username', $user->username);
        Session::put('password', request('password'));
      //redirect alla Home
        return redirect('Home');
      
  }

    public function logout() {

       //elimino la sessione
       Session::flush();
       return redirect('login');

    }

    public function login_form() {


      if(Session:: get('username')) {
  
          return redirect('Home');
  
      }
      $error = Session::get('error');
      Session::forget('error');
       return view('login')->with('error', $error);
  
    }
  
    public function do_login_form() {
      if(Session::get('username'))
      {
         return redirect('Home');
      }

      if(strlen(request('username'))==0 ||strlen(request('password'))==0){
          Session::put('error','campo_vuoto');
          return redirect('login')->withInput();
          }

         $user = User::where('username', request('username'))->first();
         if(!$user || !password_verify(request('password'), $user->Password))
          {
          Session::put('error','errato');
          return redirect('login')->withInput();
          }
       
    Session::put('username', request('username'));
    Session::put('password',request('password'));
     return redirect('Home');
  }

}



