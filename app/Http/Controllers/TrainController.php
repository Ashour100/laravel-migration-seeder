<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;

class TrainController extends Controller
{
    public function index(){
        $trains=train::all();
    return view('guest.trains',['trains'=>$trains]);
    }
}
/**
 * 
 * 
 * 
 * Creiamo una tabella trains con la relativa Migration
* Ogni treno dovrà avere:
* Azienda
* Stazione di partenza
* Stazione di arrivo
* Orario di partenza
* Orario di arrivo
* Codice Treno
* Numero Carrozze
* In orario
* Cancellato
* È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto :wink:
* Inserite inizialmente i dati interni (non la struttura) tramite PhpMyAdmin.
* Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.
* :laptop_parrot: :laptop_parrot: :laptop_parrot: :laptop_parrot: Buon lavoro e buon weekend a tutte e a tutti! :laptop_parrot: :laptop_parrot: :laptop_parrot: :laptop_parrot:
 */