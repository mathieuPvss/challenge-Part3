@extends('layout')

@section('contenu')

<form method="POST" action="/modifier_photo/{id}">
    <h2 class="form-title">Modifier la photo</h2>
    <div class="form-group">
        <input type="text" class="form-input" name="name" id="name" placeholder="Nom Prénom"/>
    </div>
    <div class="form-group">
        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
    </div>
    <div class="form-group">
        <input type="password" class="form-input" name="password" id="password" placeholder="Mot de passe"/>
        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
    </div>
    <div class="form-group">
        <input type="password" class="form-input" name="password_confirmation" id="password_confirmation" placeholder="Répeter le mot de passe"/>
    </div>
    <div class="form-group">
        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
        <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les <a href="https://www.passionfroid.fr/passionfroid/conditions-generales-de-vente" class="term-service">conditions d'utilisation</a></label>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="form-submit" value="Inscrivez-vous"/>
     </div>
</form>