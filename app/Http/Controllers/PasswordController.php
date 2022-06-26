<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class PasswordController extends BaseController
{

   
    public function controllo() {

        //controllo accesso
        if(!Session::get('username')){
    
            return redirect('login');
    
         }
         $error = Session::get('error');
         Session::forget('error');
         return view('controlloPassword')->with('error', $error);;
    
      }

     public function verifica() {

       
        if(request('password')!=Session::get('password'))
        {
            Session::put('error','not-equals');
            return redirect('controlloPassword')->withInput();
        }
      
        return redirect('cambioCredenziali');
     }


}
