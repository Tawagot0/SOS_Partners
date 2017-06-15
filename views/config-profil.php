<div class="container-fluid" id="config-profil"> 
    <div class="container">
        <form autocomplete="off" action="" method="post">
            <div class="row">
                <h2 class="center">Modifier mon profil</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Modifier votre mot de passe</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="mdp-label">Mot de passe actuel</label>
                        <input id="mdp" name="mdp" type="password" placeholder="Votre mot de passe actuel" class="form-control input-md" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="newmdp-label">Nouveau mot de passe</label>
                        <input id="newmdp" name="newmdp" type="password" placeholder="Votre nouveau mot de passe" class="form-control input-md" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Changer d'adresse mail</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="email-label">Votre adresse mail actuelle</label>
                        <input id="email" name="email" type="email" placeholder="Votre adresse email actuelle" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="newemail-label">Votre nouvelle adresse mail</label>
                        <input id="email" name="newemail" type="email" placeholder="Votre nouvelle adresse mail" class="form-control input-md" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Supprimer votre compte</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-grp check-grp">
                        <div class="[ form-group ]">
                            <input type="checkbox" name="supprimer-compte" id="supprimer-compte" autocomplete="off"/>
                            <div class="[ btn-group ]">
                                <label for="supprimer-compte" class="[ btn btn-primary ]">
                                    <span class="[ glyphicon glyphicon-ok ]"></span>
                                    <span> </span>
                                </label>
                                <label for="supprimer-compte" class="[ btn btn-default active ]">
                                    Je supprime mon compte définitivement
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Confirmer le/les changement(s)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="mdp-label">Mot de passe actuel</label>
                        <input id="mdp-confirm" name="mdp" type="password" placeholder="Votre mot de passe actuel" class="form-control input-md" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <input class="btn btn-primary" type="submit" name="confirm" value="Confirmer">
                </div>
            </div>
            </form>
    </div>
</div>