<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class DefaultController extends BaseController
{

  public function principale() {

    //controllo accesso
     if(!Session::get('username')){

        return redirect('login');

     }

     return view('Home');
    
  }

  public function cerca()
  {

 if(!Session::get('username')){

  return [];

 }

 $text=request('text');
      
 $curl = curl_init();
 
 curl_setopt_array($curl, [
	CURLOPT_URL => "https://newsx.p.rapidapi.com/search?q=" .$text,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: newsx.p.rapidapi.com",
		"X-RapidAPI-Key: 971dea79d7msh2d324f3b232e604p16dc89jsn10e256a04a80",
	],
]);

 $response = curl_exec($curl);

 $err = curl_error($curl);


 curl_close($curl);

 $new_response = $response . 'html"};';

 if ($err) {

     echo "cURL Error #:" . $err;

 } else {

     return $new_response;

 }

  }

  
  public function aggiungi() 
  { 

$request=request();
$preferiti= new Favorite();
$preferiti->user=Session::get('username');
$preferiti->autore=$request->queryautore;
$preferiti->titolo= $request->querytitolo;
$preferiti->immagine=$request->queryimg;
$preferiti->save();
if ($preferiti) {
$response = "aggiunto con successo"; 
} 
else {
$response = "errore"; 
}
return $response;

  }

  public function rimuovi() {

    if(!Session::get('username'))
    {
       return redirect('login');
    }

    $titolo=request('querytitolo');
      $utente = Session::get('username');
      $pref = Favorite::where('user',$utente)->where('titolo',$titolo)->delete();
      if($pref)
      {
        return 1;
      }
      return 0;
  }


}

  
?>

 

