<?php

namespace App\Http\Controllers\LightApp\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LightApp\Domaine;

class DomaineApiController extends Controller
{
    public function create(Request $request){

      if($request->filled('nom')){

        $domaine = new Domaine([
          'nom' => $request->nom
        ]);

        $domaine->save();

        return json_encode([
          'success' => true
        ]);
      }

      return json_encode([
        'success' => false
      ]);
    }
}
