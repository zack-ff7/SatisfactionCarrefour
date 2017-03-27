<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultatsControlleur extends Controller
{
    public function index(){



        $messages=DB::table('echantillon')->where('remarques','!=','')->pluck('remarques');
        $nouveau_rayon=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $nouveau_rayon[$i] = DB::table('echantillon')->where('qualite_fruit','=', $y)->count();
        }

        $fraicheur=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $fraicheur[$i] = DB::table('echantillon')->where('fraicheur','=', $y)->count();
        }

        $produit=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $produit[$i] = DB::table('echantillon')->where('produit','=', $y)->count();
        }

        $signal=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $signal[$i] = DB::table('echantillon')->where('signaletique','=', $y)->count();
        }

        $balance=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $balance[$i] = DB::table('echantillon')->where('balance','=', $y)->count();
        }


        $tables_prom=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $tables_prom[$i] = DB::table('echantillon')->where('table_prom','=', $y)->count();
        }


        $dispo=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $dispo[$i] = DB::table('echantillon')->where('dispo','=', $y)->count();
        }

        $promo=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $promo[$i] = DB::table('echantillon')->where('promo','=',$y)->count();
        }

        $aim=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $aim[$i] = DB::table('echantillon')->where('aim','=', $y)->count();
        }

        $other=array();
        for($i=0;$i<2;$i++) {
            $y=$i+1;
            $other[$i] = DB::table('echantillon')->where('other','=', $y)->count();
        }

        $mdd=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $mdd[$i] = DB::table('echantillon')->where('mdd','=', $y)->count();
        }

        $loc=array();
        for($i=0;$i<2;$i++) {
            $y=$i+1;
            $loc[$i] = DB::table('echantillon')->where('loc','=', $y)->count();
        }


        $prix=array();
        for($i=0;$i<4;$i++) {
            $y=$i+1;
            $prix[$i] = DB::table('echantillon')->where('prix','=', $y)->count();
        }

        $bio=array();
        for($i=0;$i<3;$i++) {
            $y=$i+1;
            $bio[$i] = DB::table('echantillon')->where('bio','=', $y)->count();
        }











        return view('admin.liste')->with([
            'rayon'=>$nouveau_rayon,
            'fraicheur'=>$fraicheur,
            'produit'=>$produit,
            'signal'=>$signal,
            'balance'=>$balance,
            'tables_prom'=>$tables_prom,
            'dispo'=>$dispo,
            'promo'=>$promo,
            'aim'=>$aim,
            'other'=>$other,
            'mdd'=>$mdd,
            'loc'=>$loc,
            'prix'=>$prix,
            'bio'=>$bio,
            'messages'=>$messages
        ]);
    }
}
