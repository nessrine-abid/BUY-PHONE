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
            <diV id="header-inf">
            
                <a href="index.php" ><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/home--v1.png" alt="home--v1"/></a> 
                
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material/24/facebook-new.png" alt="Facebook"></a>
                
                <a href="https://www.buyphone.com" target="_blank"><img src="https://img.icons8.com/material-outlined/24/instagram-new--v1.png" alt="instagram-new--v1"/></a>
                <a href="panier.php"><img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/shopping-cart-loaded.png" alt="shopping-cart-loaded"/></a>
                <a href="favoris.php"><img width="24" height="24" src="https://img.icons8.com/ios-filled/50/like--v1.png" alt="like--v1"/></a>
            </div>
            <div class="retour">
                
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php" class="menu-link">Phones</a></li>
                <li><a href="accessoire.php" class="menu-link">Accessoires</a></li>
                <li><a href="affaire.php" class="menu-link">Des Bons affaires</a></li>
                
            </ul>
        </nav>
        <main>
            <h2>Confirmation de votre demande</h2>
            <?php
            include "config.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $nom = $_POST["client_name"];
                $prenom = $_POST["client_pre"];
                $email = $_POST["client_mail"];
                $ville = $_POST["client_ville"];
                $adresse = $_POST["client_add"];
                $poste = $_POST["client_post"];
				$nom_art = $_POST["name"];
                $num = $_POST["client_tel"];
                
                $sql = "INSERT INTO commande (nom, prenom, email, num, ville, adresse, poste,nom_art)
                        VALUES ('$nom', '$prenom', '$email','$num', '$ville', '$adresse', '$poste','$nom_art')";

                if ($pdo->query($sql)) {
                    echo "<h4>Merci $nom, votre commande a bien été enregistrée  .</h4>"; 
                } else {
                    echo "<h4>Erreur : " . $pdo->error . "</h4>";
                }

                
            }
            ?>
        </main>

        <?php include 'footer.php'; ?>
    </body>

</html>

            