<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use App\Models\Favorite;
use Illuminate\Support\Facades\Session;

class NotizieTueController extends BaseController
{

  public function controllo() {

    //controllo accesso
    if(!Session::get('username')){

        return redirect('login');

     }

     return view('NotizieTue');

  }

   public function stampapreferiti() {
    $utente = Session::get('username');
     $preferiti = Favorite::where('user',$utente)->get();
     return $preferiti;
   } 

}



