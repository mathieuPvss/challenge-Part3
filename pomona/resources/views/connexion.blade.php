@extends('layout')

@section('contenu')
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="/connexion" method="post">
                    {{ csrf_field() }}
                        <h2 class="form-title">Connexion</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="email" id="email" placeholder="email"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Connectez-vous"/>

                        </div>
                    </form>
                    <p class="loginhere">
                        Aucun compte ? <a href="inscription.html" class="loginhere-link">Inscrivez-vous ici.</a>
                    </p>
                </div>
            </div>
        </section>
    </div>
</body>
@endsection
