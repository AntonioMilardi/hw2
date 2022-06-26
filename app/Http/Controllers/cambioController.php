<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class cambioController extends BaseController
{

    public function controllo() {

        //controllo accesso
        if(!Session::get('username')){
    
            return redirect('login');
    
         }
         $error = Session::get('error');
         Session::forget('error');
         return view('cambioCredenziali')->with('error', $error);;
    
      }
    
      public function cambio() {
        if(!Session::get('username'))
        {
           return redirect('login');
        }

        if(strlen(request('username'))==0 || strlen(request('password'))==0 || strlen(request('nome'))==0 
         ||strlen(request('cognome'))==0){
            Session::put('error','campo_vuoto');
            return redirect('cambioCredenziali')->withInput();
            }

            else if(strlen(request('password')) < 8)
            {

            Session::put('error','corta');
            return redirect('cambioCredenziali')->withInput();
            }
            else if(User::where('username',request('username'))->first())
            {
            Session::put('error','esistente');
            return redirect('cambioCredenziali')->withInput();
            }

        DB::table('users')
           ->where('username', Session::get('username'))
           ->update(['Nome' => request('nome'), 'Cognome' => request('cognome'),'Username' => request('username'),'password'=> password_hash(request('password'), PASSWORD_BCRYPT)]);
        Session::put('username', request('username'));
        Session::put('password',request('password'));

        return redirect('Home');

    }

}
