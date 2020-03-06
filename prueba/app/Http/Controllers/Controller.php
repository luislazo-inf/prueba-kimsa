<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use prueba\app\Institution;
use prueba\app\Providers;
use prueba\app\Ratings;
use prueba\app\Settings;
use prueba\app\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function buscarFiltros(Request $request){
        $buscarIns = Institution::where('name', '=', $request);
        $buscarUser = User::where('first_name', '=', $request);
        $buscarRating = RatingsSummary::where('number', '=', $request);
        $filtro = Input::get('filtro');
        if($filtro <>""){
            $buscarIns = Providers::whereHas('Institution', function($q) use($filtro)
            {
                $q->where('name', 'LIKE', "%$filtro%");
            });

            $buscarUser = Provider::whereHas('User', function($q) use($filtro){
                $q->where('first_name', 'LIKE', "%$filtro%");
            });

            $buscarRating = Provider::whereHas('RatingsSummary', function($q) use($filtro){
                $q->where('number', 'LIKE', "%$filtro%");
            });

            $xFiltro=true;
        }

        $buscarIns = $buscarIns->get();
        $buscarUser = $buscarUser->get();
        $buscarRating = $buscarRating->get();

        $inst_cont = count($buscarIns);
        return View::make('institute.lista', array('buscarIns' => $buscarIns))->with('inst_cont',$inst_cont);

        $user_cont = count($buscarUser);
        return View::make('user.lista', array('buscarUser' => $buscarUser))->with('user_cont',$user_cont);

        $rating_cont = count($buscarRating);
        return View::make('ratings.lista', array('buscarRating' => $buscarRating))->with('rating_cont',$rating_cont);
    }
}
