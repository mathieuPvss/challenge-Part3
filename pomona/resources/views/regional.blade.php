@extends('layout')

@section('contenu')
<body>
        <div class="navbar">
            <p>Espace Régional</p>
            
            <a href="regional.html">
                <img src="../images/logo.png" width="150" height="125">
            </a>
            <h4><span style="color:aqua">GROSSISTE ALIMENTAIRE</span> POUR LA RESTAURATION <br> PRODUITS FRAIS ET PRODUITS SURGELÉS</h4>
        </div>
            <div class="main">
                <label for="site-search">Rechercher une image</label>
                <br>
                <input type="search">
                <br>
                <br>
                <select name="typeImage" id="Imagetype">
                    <option id="ImageProduits" value="photoPassion">Photo PassionFroid</option>
                    <option id="ImageFournisseur" value="photoFourni">Photo Fournisseur</option>
                    <option id="ImageLogo" value="photoLogo">Photo Logo</option>
                </select>
                <br>
                <br>
                <label for="PhotoProduit">Photo avec produit?</label>

                <input type="checkbox" id="PhotoProduit" name="PhotoProduits?" value=false>
                
                <label for="PhotoHumain">Photo avec humain?</label>

                <input type="checkbox" id="PhotoHumain" name="PhotoHumain" value=false>

                <label for="PhotoInstitutionelle">Photo institutionelle?</label>

                <input type="checkbox" id="PhotoInstitutionelle" name="PhotoInstitutionelle" value=false>

                <br>
                <br>

                <select name="HoriVerti" id="VertiHori">
                    <option id="ImageHorizon" value="photoHorizontale">Photo Horizontale</option>
                    <option id="ImageVertic" value="photoVerticale">Photo Verticale</option>
                </select>
            </div>
    </body>
    @end