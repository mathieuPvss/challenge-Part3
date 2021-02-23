@extends('layout')

@section('contenu')
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="/inscription" id="signup-form" class="signup-form">
                        <h2 class="form-title">Créer un compte</h2>
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
                    <p class="loginhere">
                        Déja un compte ? <a href="/connexion" class="loginhere-link">Connectez-vous ici.</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
@endsection

