@extends('layouts.app')
@section('title','Etude de satisfaction')
@section('content')


    <form class="form-horizontal" method="POST" action="{{action('QuestionnaireControlleur@sendQuestion')}}">
        <fieldset>
        {!! method_field('POST') !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <!-- Form Name -->
            <legend>Etude de satisfaction carrefour</legend>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="qualite_rayon">Êtes vous satisfait du nouveau rayon fruits et légumes ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="qualite_rayon-0">
                            <input name="qualite_rayon" id="qualite_rayon-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_rayon-1">
                            <input name="qualite_rayon" id="qualite_rayon-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_rayon-2">
                            <input name="qualite_rayon" id="qualite_rayon-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_rayon-3">
                            <input name="qualite_rayon" id="qualite_rayon-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="qualite_fraicheur">Êtes vous satisfait de la qualité fraicheur des fruits et légumes ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="qualite_fraicheur-0">
                            <input name="qualite_fraicheur" id="qualite_fraicheur-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_fraicheur-1">
                            <input name="qualite_fraicheur" id="qualite_fraicheur-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_fraicheur-2">
                            <input name="qualite_fraicheur" id="qualite_fraicheur-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_fraicheur-3">
                            <input name="qualite_fraicheur" id="qualite_fraicheur-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="qualite_produit">Êtes vous satisfait de la fraicheur des produits</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="qualite_produit-0">
                            <input name="qualite_produit" id="qualite_produit-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_produit-1">
                            <input name="qualite_produit" id="qualite_produit-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_produit-2">
                            <input name="qualite_produit" id="qualite_produit-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="qualite_produit-3">
                            <input name="qualite_produit" id="qualite_produit-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="signaletique">Êtes vous satisfait de la signalétique produit ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="signaletique-0">
                            <input name="signaletique" id="signaletique-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="signaletique-1">
                            <input name="signaletique" id="signaletique-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="signaletique-2">
                            <input name="signaletique" id="signaletique-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="signaletique-3">
                            <input name="signaletique" id="signaletique-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="balances">Êtes vous satisfait des nouvelles balances ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="balances-0">
                            <input name="balances" id="balances-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="balances-1">
                            <input name="balances" id="balances-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="balances-2">
                            <input name="balances" id="balances-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="balances-3">
                            <input name="balances" id="balances-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="tables_promos">Êtes vous satisfait des tables de promotion ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="tables_promos-0">
                            <input name="tables_promos" id="tables_promos-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="tables_promos-1">
                            <input name="tables_promos" id="tables_promos-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="tables_promos-2">
                            <input name="tables_promos" id="tables_promos-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="tables_promos-3">
                            <input name="tables_promos" id="tables_promos-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="dispos_produits">Êtes vous satisfait des disponibilités produits ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="dispos_produits-0">
                            <input name="dispos_produits" id="dispos_produits-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_produits-1">
                            <input name="dispos_produits" id="dispos_produits-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_produits-2">
                            <input name="dispos_produits" id="dispos_produits-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_produits-3">
                            <input name="dispos_produits" id="dispos_produits-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="dispos_promo">Êtes vous satisfait des disponibilités des promotions ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="dispos_promo-0">
                            <input name="dispos_promo" id="dispos_promo-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_promo-1">
                            <input name="dispos_promo" id="dispos_promo-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_promo-2">
                            <input name="dispos_promo" id="dispos_promo-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="dispos_promo-3">
                            <input name="dispos_promo" id="dispos_promo-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="aim">Êtes vous satisfait de l'amabilité des salariés dans le rayon ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="aim-0">
                            <input name="aim" id="aim-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="aim-1">
                            <input name="aim" id="aim-1" value="2" type="radio">
                            Assez satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="aim-2">
                            <input name="aim" id="aim-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="aim-3">
                            <input name="aim" id="aim-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Frequentez vous dautres magasins spécialisés dans les fruits et les légumes ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input name="other" id="radios-0" value="1" checked="checked" type="radio">
                            Non
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input name="other" id="radios-1" value="2" type="radio">
                            Auchan
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-0">
                            <input name="other" id="radios-2" value="3" checked="checked" type="radio">
                            Leclerc
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-0">
                            <input name="other" id="radios-3" value="4" checked="checked" type="radio">
                            Autres
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="prix_produit">Êtes vous satisfait du rapport qualité prix produit ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="prix_produit-0">
                            <input name="prix_produit" id="prix_produit-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="prix_produit-1">
                            <input name="prix_produit" id="prix_produit-1" value="2" type="radio">
                            Assez Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="prix_produit-2">
                            <input name="prix_produit" id="prix_produit-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="prix_produit-3">
                            <input name="prix_produit" id="prix_produit-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mdd">Êtes vous satisfait du rapport qualité prix MDD ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="mdd-0">
                            <input name="mdd" id="mdd-0" value="1" checked="checked" type="radio">
                            Pas satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="mdd-1">
                            <input name="mdd" id="mdd-1" value="2" type="radio">
                            Assez Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="mdd-2">
                            <input name="mdd" id="mdd-2" value="3" type="radio">
                            Satisfait
                        </label>
                    </div>
                    <div class="radio">
                        <label for="mdd-3">
                            <input name="mdd" id="mdd-3" value="4" type="radio">
                            Très satisfait
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Préferez vous des produits Locaux ou Etrangers?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="radios-0">
                            <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                            Locaux
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radios-1">
                            <input name="radios" id="radios-1" value="2" type="radio">
                            Etrangers
                        </label>
                    </div>
                </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="loc">Preferez vous des produits locaux ou étrangers ?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="loc-0">
                            <input name="loc" id="loc-0" value="1" checked="checked" type="radio">
                            Oui il y en a assez
                        </label>
                    </div>
                    <div class="radio">
                        <label for="loc-1">
                            <input name="loc" id="loc-1" value="2" type="radio">
                            Oui mais il en manque
                        </label>
                    </div>
                    <div class="radio">
                        <label for="loc-2">
                            <input name="loc" id="loc-2" value="3" type="radio">
                            Non
                        </label>
                    </div>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="remarque">Une autre remarque?</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="remarque" name="remarque">Entrez votre remarque</textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="send"></label>
                <div class="col-md-4">
                    <button id="send" name="send" class="btn btn-primary">Envoyer</button>
                </div>
            </div>

        </fieldset>
    </form>


@endsection