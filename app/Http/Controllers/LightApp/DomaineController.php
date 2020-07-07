<?php

namespace App\Http\Controllers\LightApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LightApp\Domaine;
use Resac\Auth2;

class DomaineController extends Controller
{
  public function index(Request $request){

    $user = Auth2::user();

    $domaine_slug = $request->domaine_slug;

    $title2 = $domaine_slug;

    $domaine = Domaine::where('nom',$domaine_slug)->first();

    return view('lightapp.domaine.dashboard',[
      'title2' => $title2,
      'user' => $user,
      'domaine' => $domaine
    ]);

  }
}
