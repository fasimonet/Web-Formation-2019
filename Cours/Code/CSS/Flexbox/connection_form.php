<!DOCTYPE html>

<html>
    <head>
    	<!-- Le type d'encodage des caractères est l'UTF-8 --> 
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
        <!-- Le titre de la page (affiché au niveau de l'onglet dans le navigateur) -->
        <title>Page de connexion</title>
    </head>

    <!-- Corps du code html -->
    <body>
        <form action="connection_treatment.php", method="POST">
            <fieldset>
                <legend>Formulaire de connexion</legend>

                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Nom d'utilisateur</label>
                    <input type="text" class="form-control" placeholder="Entrer un nom d'utilisateur..." id="username">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mon_adresse@boite_mail.qqch">
                    <small id="emailHelp" class="form-text text-muted">Nous ne diffuserons pas votre adresse mail à autrui.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" id="Password" placeholder="Mot de passe">
                </div>
              
                <button type="submit" class="btn btn-primary">Connexion</button>
            </fieldset>
        </form>
    </body>
</html>
<!-- Fin du code html -->
