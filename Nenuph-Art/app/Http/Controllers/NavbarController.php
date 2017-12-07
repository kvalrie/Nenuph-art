<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function showService(){
    	return view ('service_client');
    }
      public function showApropos(){
    	return view ('a_propos');
    }
      public function showConnexion(){
    	return view ('Connexion');
    }

}
