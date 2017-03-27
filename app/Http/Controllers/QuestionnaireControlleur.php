<?php

namespace App\Http\Controllers;

use App\Echantillon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionnaireControlleur extends Controller
{
    public function index(){
        return view('app.questions');
    }

    public function sendQuestion(Request $request){
 /*
        $echantillon=new Echantillon();

        $echantillon->qualite_fruit=$request->qualite_rayon;
        $echantillon->fraicheur=$request->qualite_fraicheur;
        $echantillon->produit=$request->qualite_produit;
        $echantillon->signaletique=$request->signaletique;
        $echantillon->balance=$request->balances;
        $echantillon->table_prom=$request->tables_promos;
        $echantillon->dispo=$request->dispos_produits;
        $echantillon->promo=$request->dispos_promo;
        $echantillon->aim=$request->aim;
        $echantillon->other=$request->other;
        $echantillon->mdd=$request->mdd;
        $echantillon->loc=$request->loc;
        $echantillon->prix=$request->prix_produit;
        $echantillon->bio=$request->radios;
        $echantillon->remarques=$request->remarque;

        $echantillon->save();
*/

        DB::table('echantillon')->insert(
            array('qualite_fruit' => $request->qualite_rayon, 'fraicheur' => $request->qualite_fraicheur, 'produit' => $request->qualite_produit, 'signaletique' => $request->signaletique,
                'balance' => $request->balances,'table_prom' => $request->tables_promos,'dispo' => $request->dispos_produits ,'promo' => $request->dispos_promo,
                'aim' => $request->aim,'other' => $request->other,'mdd' => $request->mdd,'loc' => $request->loc,
                'prix' => $request->prix_produit,'bio' => $request->radios,'remarques' => $request->remarque)
        );
        return view('app.exit');
    }
}
