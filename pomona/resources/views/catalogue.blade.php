@extends('layout')

@section('contenu')
<body>
    <div class="navbar">
        <p>Espace Régional</p>
        <a href="regional.html">
            <img src="../images/logo.png" width="150" height="125">
        </a>
        <h4><span style="color:aqua">GROSSISTE ALIMENTAIRE</span> POUR LA RESTAURATION <br> PRODUITS FRAIS ET PRODUITS SURGELÉS</h4>
        <br>
        <input type="search" value="chercher">   
    </div>
    <div class="Attribut"> 
        <div class="Espace">
            <div class="Espace">
                <span class="a-size a-color-base a-text-bold" dir="auto">Affiner la recherche</span>
            </div>
            <ul>
                <li class="Espace">Photo PassionFroid</li>
                <li class="Espace">Photo fournisseur</li>
                <a class="Espace" href="../images/logo.png">
                    <li class="Photo">Photo logo</li>
                </a>                    
            </ul>
        </div>
        <form action="{{ route('products.search') }}">
            <input type="text" name="q">
            <button type="submit">Rechercher</button> 
        </form>
        <div class="Espace">
            <div class="Espace">
                <span class="Espace" dir="auto">Produit, Humain, Institutionelle, Format</span>
                <br><br>
                <input type="checkbox" id="PhotoProduit" name="PhotoProduits?" value=false>
                <label for="PhotoProduit">Photo avec produit?</label>
                <br><br>
                <input type="checkbox" id="PhotoHumain" name="PhotoHumain" value=false>
                <label for="PhotoHumain">Photo avec humain?</label>
                    <br><br>
                <input type="checkbox" id="PhotoInstitutionelle" name="PhotoInstitutionelle" value=false>
                <label for="PhotoInstitutionelle">Photo institutionelle?</label>
                <br><br>
                <input type="checkbox" id="Vertical" name="VerticalPhoto" value=false>
                <label for="Vertical">Vertical</label>
                <br><br>
                <input type="checkbox" id="Horizontale" name="HorizontalePhoto" value=false>
                <label for="Horizontale">Horizontale</label>        
            </div> 
        </div>
    </div>
    <div class=Attribut2>
        <a href=welcome.html class="Espace">
          <h3>Déconnexion de l'espace</h3>  
        </a>
    </div>
    <div class="main">
        <div class="card" style="width:350px">
            <img class="card-img-top" src="../images/logo.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Insert here</h4>                        
                <p class="card-text">Legend</p>
                <a href="repo/where/the/image/is/stocked" class="btn btn-primary">Télécharger!</a>
            </div>
        </div>
        <div class="card" style="width:350px">
            <img class="card-img-top" src="../images/signup-bg.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Insert here</h4>
                <p class="card-text">Legend</p>
                <a href="repo/where/the/image/is/stocked" class="btn btn-primary">Télécharger!</a>
            </div>
        </div>  
    </div>
</body>
@endsection