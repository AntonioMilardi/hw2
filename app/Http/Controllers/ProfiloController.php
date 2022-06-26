<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class ProfiloController extends BaseController
{

    public function controllo() {

        //controllo accesso
        if(!Session::get('username')){
    
            
            return redirect('login');
    
         }
    
         return view('Profilo');
    
      }

      public function mostracredenziali(){

        $utente = Session::get('username');
        $dati = User:: where('username',$utente)->first();
        return $dati;
      }

      public function elimina() {

        if(!Session::get('username'))
        {
           return redirect('login');
        }
  
  
          $nome_utente = Session::get('username');
          $user = User::where('username',$nome_utente)->first();
          if($user)
          {
              User::where('username',$nome_utente)->delete();
              Session::flush();
            return 1;
          }
          return redirect('Profilo');
  }

      }



