<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
<<<<<<< HEAD
    public function photo(int $id)
    {
        $photo =  Photos::findorfail($id);
        return view('photo', compact('photo'));
    }
    public function modifier_photo(int $id)
    {
        $photo = Photo::findorfail($id);
        request()->validate([
            'nom' =>['required'],
            'type' =>['required'],
            'categorie' =>['required','email'],
            'produit' =>['required'],
            'humain' =>['required'],
            'institutionnelle' =>['required'],
            'format' =>['required'],
            'credit' =>['required'],
            'droits' =>['required'],
            'copyright' =>['required'],
            'dtn_fin_droits' =>['required'],
        ]);

        $date = date('Y-m-d', strtotime(str_replace('/','-',$request->dtn_fin_droits)));
        $photo->nom = request('nom');
        $photo->type = request('type');
        $photo->categorie = request('categorie');
        $photo->produit = request('ville');
        $photo->adresse = request('adresse');
        $photo->pays = request('pays');
        $photo->dtn = $date;
        $photo->code_postal = request('cp');
        $photo->save();

        return back()->with('success', "Votre photo a été mise à jour");
    }

    public function supprimer_photo(int $id)
    {
        $photos= Photo::findorfail($id);
        $photos->delete();
    }

    public function catalogue_photo(){
        $catalogue = Photo::all();

        return view('catalogue', [
            'photos' => $catalogue
        ]);
=======
    public function remplir_photo(Request $request)
    {
        $photo = Photo::findorfail($request->photo);
        request()->validate([
            'nom' =>['required'],
            'prenom' =>['required'],
            'email' =>['required','email'],
            'ville' =>['required'],
            'adresse' =>['required'],
            'pays' =>['required'],
            'dtn' =>['required'],
            'cp' =>['required'],
        ]);

        $date = date('Y-m-d', strtotime(str_replace('/','-',$request->dtn)));
        $user = auth()->user();
        $user->nom = request('nom');
        $user->prenom = request('prenom');
        $user->email = request('email');
        $user->ville = request('ville');
        $user->adresse = request('adresse');
        $user->pays = request('pays');
        $user->dtn = $date;
        $user->code_postal = request('cp');
        $user->save();
            return back()->with('success', "Vos coordonnées ont étés mises à jour");
>>>>>>> 3c0cdbc408236583527f127b5d06ef3db6849725
    }
}
