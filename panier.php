<!DOCTYPE html>
<html>
    <head>
        <title>ACCUEIL - BUYPHONE</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <header>
            <div id="logo-phone">
                <img src="images/logo.png" alt="logo buy phone">
            </div>
            <div class="header-text">
                <h1>BUY PHONE</h1>
                <p class="subtitle">Find the perfect smartphone at the best price</p>
            </div>
        </header>
        <nav>
            <a href="index.php" ><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/home--v1.png" alt="home--v1"/></a> 
        </nav>

        <main>
            <h1>Commande</h1> 
            <form id="formulaire" action="traiter.php" method="POST">
                <fieldset>
    			    <?php $nom = $_POST['nom']  ; ?>
					
                    <label for="client_mail">Adresse mail <span class="etoile">*</span></label>
                    <input type="email" name="client_mail" id="client_mail" required></br>
                    <label for="client_name">Nom  <span class="etoile">*</span></label>
                    <input type="text" name="client_name" id="client_name" required></br>

                    <label for="client_pre">Prénom  <span class="etoile">*</span></label>
                    <input type="text" name="client_pre" id="client_pre" required></br>
					<label for="client_tel">Numéro de teléphone  <span class="etoile">*</span></label>
                    <input type="text" name="client_tel" id="client_tel"  size ="8" maxlength="8" required></br>
                    <label for="client_ville">Ville  <span class="etoile">*</span></label>
                    <input type="text" name="client_ville" id="client_ville" require></br>
                    <label for="client_add">Adresse  <span class="etoile">*</span></label>
                    <input type="text" name="client_add" id="client_add" require></br>
                    <label for="client_post">Code Postal  <span class="etoile">*</span></label>
                    <input type="text" name="client_post" id="client_post" size ="4" maxlength="4" required></br>

					<input type="hidden" name="name" value="<?= htmlspecialchars($nom) ?>">
                </fieldeset>
                <input type="submit" class="conf-P" value="confirmer">
            </form>

        </main>
        <?php include 'footer.php' ; ?>
    </body>
</html>