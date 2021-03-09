<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grille;
use App\Models\Chapitre;
use App\Models\User;



class GrilleController extends Controller
{
    

    public function addGrille(){
        
        $grille = new Grille();
        $grille->name = "sarah";
        $grille->save();
        return "hh";
    }
    public function addChapitre($id){
        $grille = Grille::find($id);
        $chapitre = new Chapitre();
        $chapitre->chapitre = "chapitre";
        $grille->chapitres()->save($chapitre);
        return "success','Abonnement a été ajouté";
    }
}
