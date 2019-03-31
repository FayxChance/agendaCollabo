<h1 center>Bien</h1>
<div class="row">
    <div class="col-md-5">
        <h3 class="text-center">Connexion</h3>
        <form method="post" action="./controller/login.php" class=well>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="pseudo" name="pseudoLogin" class="form-control" id="pseudoLogin" placeholder="pseudo">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="passwordLogin" class="form-control" id="password" placeholder="password">
            </div>
			<br />
			<br />
			<br />
			<br />

            <input type="submit" name="connexionLogin" class="btn btn-default block" value="Connexion">
        </form>
    </div>
	    <div class="col-md-6">
        <h3 class="text-center">Inscription</h3>
        <form method="post" action="./controller/signin.php" class=well>
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="pseudo" name="pseudo" class="form-control" id="pseudo" placeholder="pseudo">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
			
			 <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
            </div>

            <input type="submit" name="inscription" class="btn btn-default block" value="S'inscrire">
        </form>
    </div>
</div>