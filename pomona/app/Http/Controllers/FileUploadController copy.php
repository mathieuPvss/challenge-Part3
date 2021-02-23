<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\File;
use App\Models\Photos;
class FileUploadController extends Controller
{

    //essaie de l'implémentation de cloudinary
    public function ajout()
    {
        return view('ajout');
    }
    public function ajout_en_masse() //le dossier doit être stocker à la racine du fichier public
    {
        $path = public_path('/' . "photos_produits");
        $files = File::allfiles($path);
        foreach ($files as $photo){
            $photo = Photos::create([
                // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
               'url_photo' => cloudinary()->upload($photo->getRealPath())->getSecurePath()
            ]);
        }
    }
    public function ajouter(Request $request)
    {
        foreach($request->file as $photo){
            cloudinary()->upload($photo->getRealPath())->getSecurePath();
            $photo = Photos::create([
                // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
               'url_image' => cloudinary()->upload($photo->getRealPath())->getSecurePath()
            ]);
        }

        return back()
            ->with('success', 'File uploaded successfully');
    }

    // public function storeUploads(Request $request)
    // {
    //     $request->file('file')->store('images');

    //     return back()
    //         ->with('success', 'File uploaded successfully');
    // }
}
