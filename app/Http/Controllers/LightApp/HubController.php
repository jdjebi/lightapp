<?php

namespace App\Http\Controllers\LightApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Resac\Auth2;
use App\Models\LightApp\Domaine;


class HubController extends Controller
{
    public function index(){

      $title2 = 'HUB';

      $user = Auth2::user();

      $domaines = Domaine::all();

      return view('lightapp.hub',[
        'title2' => $title2,
        'user' => $user,
        'domaines' => $domaines
      ]);
    }


}
